<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\User;

class AdminController extends Controller


{
    //Users

    public function user()
    {
        $data=user::all();
        return view('admin.users',compact('data'));

    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();

    }

    //FoodMenu

    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updateview($id)
    {
        $data=food::find($id);
        return view("admin.updateview", compact("data"));

    }

    public function update(Request $request, $id )
    {
        $data=food::find($id);

        $image = $request->image;

        $imagename = time().'.'. $image -> getClientOriginalExtension();

                $request -> image -> move('foodimage',$imagename);

                $data->image = $imagename;
                $data->title = $request -> title;
                $data->price = $request -> price;
                $data->description = $request -> description;
                $data->save();

                return redirect()->back();

    }

    public function foodmenu()
    {
        $data = food::all();
        return view('admin.foodmenu', compact("data"));

    }

    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;

        $imagename = time().'.'. $image -> getClientOriginalExtension();

                $request -> image -> move('foodimage',$imagename);

                $data->image = $imagename;
                $data->title = $request -> title;
                $data->price = $request -> price;
                $data->description = $request -> description;
                $data->save();

                return redirect()->back();

    }




    public function index()
    {
        return view("");
    }

    public function redirects()
    {
        return view("admin.adminhome");
    }



    //Reservation

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

    public function viewreservation(Request $request)
    {
    $data = reservation::all();

        return view("admin.adminreservation", compact("data"));

    }


    //Chefs

    public function viewchef()
    {
        return view("admin.adminchef");
    }


}
