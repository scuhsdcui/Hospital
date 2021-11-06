<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
     $doctor=doctor::all();
        return view('patient.home',compact('doctor'));
    }
    }

public function appointment(Request $request){
    $validator=Validator::make($request->all(),[
        'name'=> 'required',
        'email'=> 'required',
        'phone'=>'required',
        'doctor'=>'required',
        'date'=>'required',
        'message'=>'required',
    ]);
    if($validator->fails()){
        return redirect()->to('/')->withErrors($validator)->withInput();
    }else{
        $data= new Appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->doctor=$request->doctor;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->status='in progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
    }
    $data->save();

    return redirect()->back()->with('message', 'Appoinment Request Successful
        .We Will Contact with you soon');

    }

    }
    public function myappointment(){
        if(Auth::id()){
            if(Auth::user()->usertype=0){
                $userid=Auth::user()->id;
            $appoint=Appointment::where('user_id',$userid)->get();
        return view('patient.my_appointment',compact('appoint'));
            }

        }else{
            return redirect()->back();
        }
    }

     public function cancelAppoint($id){
         $data=Appointment::find($id);
         $check=$data->delete();
         if($check){
             return redirect()->back()->with('message','Your Appointment Canceld');
         }

     }




}






