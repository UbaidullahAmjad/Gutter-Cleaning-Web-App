<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

class AppointmentController extends Controller
{
    public function index(Request $request){

        DB::table('appointments')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'service_type' => $request->service_type,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $this->sendMessage('Appointment request sent!!', '+92 349 8869509');
        return back()->with('success','Appointment requested successfully!');
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
