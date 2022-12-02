<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('active',1)->where('serviceable_type','App/User')->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookings.create');
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
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Booking $booking)
    {
        if($booking->active) {
            $booking->active = 0;
        }
        else{
            $booking->active = 1;
        }

        $booking->save();

        return back()->with('success','Success! Bookings status changed successfully!');
    }
    
        public function deleted(Booking $booking)
    {

        $booking->delete();

        return back()->with('success','Deleted! Bookings delete successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $bookings = Booking::where('active',0)->where('serviceable_type','App/User')->get();
        $guest_bookings = Booking::where('active',0)->where('serviceable_type','App/Guest')->get();
        return view('admin.bookings.history', compact('bookings','guest_bookings'));
    }



    public function guestBookings()
    {
        $bookings = Booking::where('active',1)->where('serviceable_type','App/Guest')->get();
        return view('admin.bookings.guest-bookings', compact('bookings'));
    }

    public function guestBookingsShow(Booking $booking)
    {
        return view('admin.bookings.show-guest-bookings', compact('booking'));

    }
}
