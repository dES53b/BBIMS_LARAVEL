<?php

namespace App\Http\Controllers;
use App\Models\Clinic;
use App\Models\Alerts;

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

    function alertClinic()
    {
      $alert = new Alerts();
      $alert->security = request('security');
      $alert->pickup_time = request('pickup-time');
      $alert->receiver = request('receiver');
      $alert->save();

      return redirect()->route('newAlerts');
    }

}
