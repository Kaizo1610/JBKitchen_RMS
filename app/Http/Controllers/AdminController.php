<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;



class AdminController extends Controller

{
    public function index()
    {
        // $staff=DB::table('staff')
        // ->orderBy('staff_number','asc')
        // ->get();

        // return view('staff', ['staff'=>$staff]);
        return view("admin");

    }
    public function reservation(Request $request)
{
    $data = new reservation;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();

        return redirect()->back();

}

}
