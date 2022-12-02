<?php

namespace App\Http\Controllers;

use App\Models\Estimate;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function request(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        Estimate::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success','Estimate request sent!');
    }
}
