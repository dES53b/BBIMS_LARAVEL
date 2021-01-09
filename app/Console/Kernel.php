<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
use App\Models\Donor;
use App\Models\Donation;
use App\Helpers\SMSHelper;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $schedule->call( function ()
      {

        //get donors donation date
        //add 59 days to it with carbon
        //If today is equal to 59 days after donation date, send sms
        //notifying the user that they can donate tomorrow
        $donor = new Donor;

        $donation_info = $donor->join('donations', 'donor.id', '=', "donations.donorId")
                                ->select('donations.nextDonation', 'donor.phone')->get();
        foreach ($donation_info as $value) {

          $nextDonation = Carbon::parse($value->nextDonation);


          if(Carbon::now() == $nextDonation->subDays(1)){
            $smsHelper = new SMSHelper();
            $message = "Hello, ".$value->name." , your next donation is tomorrow. Please visit the nearest donation center and make your donation";
            $smsHelper->sendSMS($value->phone, $message);
          }
        }



      })->daily();
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
