<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Food;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        return view("home", compact("data"));
    }
}
