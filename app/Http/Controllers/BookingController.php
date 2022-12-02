<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmed;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Service;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

class BookingController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('frontend.services.index', compact('services'));
    }

    public function calender(Service $service)
    {
        return view('frontend.services.calender', compact('service'));
    }
    public function bookingForm(Request $request)
    {
        $data = $request->except('_token');

        session()->put('booking_info',$data);

        //dd(session()->get('booking_info'));

        return view('frontend.services.booking-form');
    }

    public function book(Request $request)
    {
        $request->validate(
            [
                'time_slot_id' => 'required',
                'date' => 'required',
                'service_id' => 'required',

            ],
            [
                'date.required' => 'You have to choose the date!',
                'time_slot_id.required' => 'You have to choose the Slot!',
            ]
        );
        $date = Carbon::create($request->date)->toDateString();

        $booking = Booking::create([
            'serviceable_id' => \auth()->user()->id,
            'serviceable_type' => 'App/User',
            'time_slot_id' => $request->time_slot_id,
            'service_id' => $request->service_id,
            'date' => $date,
        ]);

        Mail::to($request->user())->send(new BookingConfirmed($booking));

        $this->sendMessage('Service booked Successfully!', '+92 349 8869509');
        return redirect()->route('calender',['service'=>$request->service_id])->with('success','Your slot has been booked!');
    }
    public function guestBooking(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required',
            'address' => 'required',
        ],
            [
                'time_slot_id' => 'required',
                'date' => 'required',
                'service_id' => 'required',

            ],
            [
                'date.required' => 'You have to choose the date!',
                'time_slot_id.required' => 'You have to choose the Slot!',
            ]
        );
        
        $data = session()->get('booking_info');
        $service_id = $data['service_id'];
        $time_slot_id = $data['time_slot_id'];
       if($time_slot_id != null){
           $date = $data['date'];
        $guest = Guest::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $date = Carbon::create($date)->toDateString();

        $booking = Booking::create([
            'serviceable_id' => $guest->id,
            'serviceable_type' => 'App/Guest',
            'time_slot_id' => $time_slot_id,
            'service_id' => $service_id,
            'date' => $date,
        ]);
        Mail::to($guest)->send(new BookingConfirmed($booking));


        $this->sendMessage('Service booked Successfully!', '+92 349 8869509');

        return redirect()->route('calender',['service'=>$service_id])->with('success','Your slot has been booked!');
       
           
       }else{
           return redirect()->route('calender',['service'=>$service_id])->with('success','please choose slot');
       }
       
       
        
    }

    private function sendMessage($message, $recipients)
    {
        $account_sid = env("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");

        try {
            $client = new Client($account_sid, $auth_token);
        } catch (ConfigurationException $e) {
            return dd($e);
        }
        $client->messages->create($recipients,
            ['from' => $twilio_number, 'body' => $message] );
    }
}
