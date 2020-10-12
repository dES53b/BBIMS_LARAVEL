<?php

namespace App\Http\Controllers;
use App\Models\Clinic;

use Illuminate\Http\Request;

class AlertsController extends Controller
{

    function index()
    {
      return view('alerts.clinic');
    }

    function alertClinic()
    {
      $alert = new Alert();
      $alert->security = request('security');
      $alert->pickup_time = request('pickup-time');
      $alert->receiver = request('receiver');
      $alert->save();

      return redirect()->route('newAlerts');
    }

}
