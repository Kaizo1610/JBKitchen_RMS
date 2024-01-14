<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff; /* dlm controller kena ada models*/
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
        $Staff-> staff_name=$request->staff_name;
        $Staff-> staff_number=$request->staff_number;
        $Staff-> shift=$request->shift;
        $Staff-> duty=$request->duty;
        $Staff-> save();
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
