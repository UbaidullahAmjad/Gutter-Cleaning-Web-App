<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
class ReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder of next day jobs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->message();
        return 0;
    }
    
    /**
     * Complete logic for sending reminder.
     *
     * 
     */
    private function message(){
        \Log::info('Bilawal 002, Your scheduling command is working');
        // $this->info('Bilawal, Your scheduling command is working');
        $user = \App\Models\User::find(3);
        $dt = Carbon::today();
        $bookings = \App\Models\Booking::all();
        
        foreach($bookings as $booking){
            $date=date_create($booking->date);
            $new = date_sub($date,date_interval_create_from_date_string("1 days"));
            // dd($dt->toDateString());
            if(date_format($new,"Y-m-d") == $dt->toDateString()){
                // dd('in');
            $msg = '
                    Dear '. $user->name.',
                    Your tommorrow schedule is '. $booking->slot->start_time .' to 
                    '. $booking->slot->end_time .'  at '. $booking->date .'
                    Thanks
                    '.  config('app.name').'';
                    
            mail($user->email,"Reminder",$msg);
            }
            
        }
        // dd('out');
    }
}
