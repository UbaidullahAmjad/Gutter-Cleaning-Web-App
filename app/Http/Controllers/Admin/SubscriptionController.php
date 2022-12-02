<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\PackageSubscription;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::with(['customer', 'package'])->get();

        return view('admin.subscriptions.index')->with('subscriptions', $subscriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        $pack = Package::find($subscription->package_id);
        return view('admin.subscriptions.show')->with('package', $pack);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {

        $subscription->delete();

        return back();
    }
    public function changeStatus(Subscription $subscription)
    {

        if ($subscription->active == 1) {
            $subscription->active = 0;
        } else {
            $subscription->active = 1;
        }

        $subscription->save();

        return back()->with('success','Success! Subscription status changed successfully!');
    }
}
