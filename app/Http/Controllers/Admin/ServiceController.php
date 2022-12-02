<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'photo' => 'mimes:jpg,png,jpeg',
        ]);
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $name = $photo->getClientOriginalName();

            $fileName = time() . $name;
            $attachment = $photo->move(storage_path() . '/app/public/services/', $fileName);
        }
        $slot = Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'delivery_time' => $request->delivery_time,
            'photo' => $fileName,
        ]);

        return redirect()->route('admin.services.index')->with('success','Success! A new service added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {
            Storage::delete(storage_path() . '/app/public/services/' . $request->prev_photo);
            $photo = $request->photo;
            $name = $photo->getClientOriginalName();
            $fileName = time() . $name;
            $attachment = $photo->move(storage_path() . '/app/public/services/', $fileName);
        } else {
            $fileName = $request->prev_photo;
        }
        Service::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'delivery_time' => $request->delivery_time,
            'photo' => $fileName,
        ]);

        return redirect()->route('admin.services.index')->with('success','Success! Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return back()->with('success','Success! Service deleted successfully!');
    }
}
