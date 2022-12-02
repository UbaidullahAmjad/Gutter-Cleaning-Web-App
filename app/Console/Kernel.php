<?php

namespace App\Console;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\ReminderEmail::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function(){
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
        })->dailyAt('21:00');
        // $schedule->command('reminder:email')->everyMinute();
        
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
