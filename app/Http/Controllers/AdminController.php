<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{

    public function addview(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }

    }


    public function upload(Request $request){
     $validator=Validator::make($request->all(),[
         'name'=> 'required',
         'phone'=>'required',
         'speciality'=>'required',
         'room_no'=>'required',
         'doctor_image'=>'required|image|mimes:jpeg,png,jpg,gif',

     ]);
     if($validator->fails()){
         return redirect()->to('add_doctor')->withErrors($validator)->withInput();
     }else{
      $doctor=new Doctor;
      $doctor->name=$request->name;
      $doctor->phone=$request->phone;
      $doctor->speciality=$request->speciality;
      $doctor->room_no=$request->room_no;
      $image=$request->doctor_image;
      $imagename=time().'.'.$image->getClientoriginalExtension();
      $request->doctor_image->move('doctor_image' ,$imagename);
      $doctor->doctor_image=$imagename;
      $check=$doctor->save();
      if($check){
        $request->session()->flash('message', 'New Doctor added successfuly');
        return redirect('add_doctor');
      }


     }



    }
    public function showAppoints(){
       if(Auth::id()){
           if(Auth::user()->usertype==1){
            $data=Appointment::all();


            return view('admin.show_appointments',compact('data'));
           }else{
               return redirect()->back();
           }
       }else{
           return redirect('login');
       }

    }
public function approve($id){
$data=Appointment::find($id);
$data->status='approved';
$data->save();
return redirect()->back();
}
 public function cancel($id){
    $data=Appointment::find($id);
    $data->status='canceled';
    $data->save();
    return redirect()->back();
 }
 public function showdoctors(){
     if(Auth::id()){
         if(Auth::user()->usertype==1){
            $data=Doctor::all();
            return view('admin.show_doctor',compact('data'));
         }else{
             return redirect()->back();
         }
     }else{
         return redirect('login');
     }

 }
 public function deletedoc($id){
   $data=Doctor::find($id);
 $check=$data->delete();
 if($check){
     return redirect()->back()->with('message','Doctor Deleted Successfully');
 }
 }
 public function editdoc($id){
    $data=Doctor::find($id);
     return view('admin.edit_doc',compact('data'));
 }
public function updatedoc(Request $request ,$id){


    $doctor=Doctor::find($id);
     $doctor->name=$request->name;
     $doctor->phone=$request->phone;
     $doctor->speciality=$request->speciality;
     $doctor->room_no=$request->room_no;
     $image=$request->doctor_image;
     if($image){
     $imagename=time().'.'.$image->getClientoriginalExtension();
     $request->doctor_image->move('doctor_image' ,$imagename);
     $doctor->doctor_image=$imagename;
}
     $check=$doctor->save();
     if($check){
       $request->session()->flash('message', ' Doctor Updated successfuly');
       return redirect()->route('showdoctors');
     }


}

public function emailview($id){
    $data=Appointment::find($id);
    return view('admin.email_view',compact('data'));
}

public function sendmail(Request $request ,$id){
    $data=Appointment::find($id);

    $details=[
        'greeting'=>$request->greeting,
        'body'=>$request->body,
        'actiontext'=>$request->actiontext,
        'actionurl'=>$request->actionurl,
        'endpart'=>$request->endpart,
    ];
    Notification::send($data,new SendEmailNotification($details));
    return redirect()->back()->with('message', 'Notification Has been Send');

     //   specific email
    // Notification::route('mail','exampl@gmail.com')->notify(new SendEmailNotification($details));
    }

}



