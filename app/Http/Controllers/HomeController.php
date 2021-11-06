<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirect()
    {
        if(Auth::id()){

            if(Auth::user()->user_type==0){
                $doctor=doctor::all();
                return view('patient.home',compact('doctor'));
            }else{
                $doctor=Doctor::count();
                $patient=User::count();
                $appoint=Appointment::count();
                $pendig=Appointment::where('status','in progress')->count();
                $approve=Appointment::where('status','approved')->count();
                $cancel=Appointment::where('status','canceled')->count();
                $data=[
                    'doctor'=>$doctor,
                    'patient'=>$patient,
                    'appoint'=>$appoint,
                    'pending' => $pendig,
                    'approve'=>$approve,
                    'cancel' =>$cancel

                ];
                return view('admin.home',compact('data'));
            }




        }else{


    return redirect()->back();




        }

    }

}
