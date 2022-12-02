<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionRequested;
use App\Models\Package;
use App\Models\PackageSubscription;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = DB::table('packages')->get();

        return view('frontend.packages', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request, Package $package)
    {
        // dd($request->all());
        $sub = Subscription::where('user_id',auth()->user()->id)->where('package_id',$package->id)->where('active',2)->get();
        
        if(count($sub) == 0){
            $subscription = Subscription::create([
            'user_id' => auth()->user()->id,
            'package_id' => $package->id,
            ]);
            Mail::to($request->user())->send(new SubscriptionRequested($package));
    //        $this->sendMessage('Appointment request sent!!', '+92 349 8869509');
    
    
            return redirect()->route('packages')->with('success','Subscription request sent!');
        }else{
            
            return redirect()->route('packages')->with('success','You Already subsucribe this package and your status is inactive');
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
