<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request){
//        dd($request->all());

        $request->validate(
            [
                'email' => 'required|string|email|max:255|unique:newsletters',
            ],
            [
                'email.unique' => 'You have already subscribed to our newsletter!',
            ]);
        Newsletter::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success','You have subscribed to our newsletter.');
    }
}
