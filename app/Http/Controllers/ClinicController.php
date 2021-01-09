<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alerts;
use App\Models\Clinic;
use Hash;


class ClinicController extends Controller
{
    //

    function index()
    {
      // code...
      return 'Clinics Page';
    }

    function newClinicPage()
    {
      // code...

      return view('clinics.new-clinic');
    }
    function editPage($id)
    {
      // code...
      $clinic = new Clinic();
      $clinic = $clinic->findOrFail($id);
      return view('clinics.edit-clinic', ['clinic' => $clinic]);
    }


    function view()
    {
      // code...
        $clinic = new Clinic();
        $clinics = $clinic->all();
        return view('clinics.view-clinics', ['clinics' => $clinics]);

    }

    function getAlerts($id){

      $alertModel = new Alerts();
      return $alertModel->where('receiver', $id)->get();

    }



    function create()
    {
      // code...
      Clinic::create(
        ['name' => request('name'),
         'password' => Hash::make(request('password')),
         'username' => request('username'),
         'location' => request('location')]
      );

      return redirect()->back();
    }

    function clinicHome(){
      $alerts = $this->getAlerts(Auth::guard('clinic')->user()->id);
      return view('clinics.clinic', ['alerts' => $alerts]);
    }

    function delete()
    {
      // code...
        $clinic = new Clinic();
        $clinic->findOrFail(request('id'))->delete();
        return redirect()->route('viewClinics');
    }
    function update()
    {
      // code...
        $clinic = new Clinic();
        if ( is_null(request('password'))) {
          // code...
          $clinic->where('id', request('id'))->update(
            ['name' => request('name'),
              'location' => request('name'),

              'username' => request('username')]);

            return redirect()->route('viewClinics');
        }
        else {
          // code...

        $clinic->where('id', request('id'))->update(
          ['name' => request('name'),
            'location' => request('location'),
            'password' => request('password'),
            'username' => request('username'),]
        );
        return redirect()->route('viewClinics');
      }
    }
  }
