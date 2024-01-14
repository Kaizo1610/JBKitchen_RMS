<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff; /* dlm controller kena ada models*/
use Illuminate\Support\Facades\DB;

class staffcontroller extends Controller
{
    public function index()
    {
        $staff=DB::table('staff')
        ->orderBy('staff_number','asc')
        ->get();

        return view('staff', ['staff'=>$staff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff= new Staff();
        $staff-> staff_name=$request->staff_name;
        $staff-> staff_number=$request->staff_number;
        $staff-> shift=$request->shift;
        $staff-> duty=$request->duty;
        $staff-> save();
        return redirect('staffmember');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
