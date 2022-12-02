<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('customer.settings.update');
    }
    public function editAdmin()
    {
        return view('admin.settings.update');
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|max:255',
            'phone_number' => 'string',
            'address' => 'string',
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        if (!empty($request->password)) {
            $request->validate([
                'password' => 'string|min:8',
            ]);
            auth()->user()->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return back()->with('success','Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
