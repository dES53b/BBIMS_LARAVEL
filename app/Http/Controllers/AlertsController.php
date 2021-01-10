<?php

namespace App\Http\Controllers;
use App\Models\Clinic;
use App\Models\Alerts;
use App\Models\Donor;
use App\Helpers\SMS;

use Illuminate\Http\Request;

class AlertsController extends Controller
{

    function index()
    {


      return view('alerts.send-alerts');
    }

    function alertPage()
    {
      $clinic = new Clinic();
      $clinics = $clinic->all();
      return view('alerts.clinic', array('clinics' =>$clinics ));
    }
    function alertDonorPage()
    {
      $donor = new donor();
      $donorLocations = $donor->select('location')->distinct()->get();

      return view('alerts.donor', array('donorLocations' =>$donorLocations));
    }

    function alertClinic()
    {
      $alert = new Alerts();
      $alert->security = request('security');
      $alert->pickup_time = request('pickup-time');
      $alert->receiver = request('receiver');
      $alert->save();

      return redirect()->route('newAlerts');
    }
    function alertDonor()
    {

      $alertContent = request('content');
      $alertLocation = request('location');
      $donor = new Donor;
      $donors = $donor->where('location', $alertLocation)->get();
      $sms = new SMS;
      foreach ($donors as $donor) {
        $sms->sendSMS($donor->phone, $alertContent);
      }
      return redirect()->back();
    }

}
