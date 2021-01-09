<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Hash;
use App\Models\Donor;
use App\Models\Donation;
use App\Clinic;
use Carbon\Carbon;
use App\Helpers\SMSHelper;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth ;
use AfricasTalking\SDK\AfricasTalking;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $donors = Donor::all();
        return view('donors.index',['donors' => $donors,]);
    }
    function getAge($dob){
      return Carbon::parse($dob)->diff(Carbon::now())->format('%y years and %m months');
    }
    function donorHome(){

      $donorId = Auth::guard('donor')->user()->national_id;
      $donation = new Donation();

      if (!empty($donation->where('donorId', $donorId)->first()->nextDonation)) {
        $nextDonation = $donation->where('donorId', $donorId)->first()->nextDonation;
      }else{
        $nextDonation = "Not available. Make a donation first.";
      }

      return view('donors.donor-home', array('donorId' => $donorId, 'nextDonation' => $nextDonation));
    }

    function donorHistory($id){
      $donation = new Donation();
      $history = $donation
      ->join('clinics', 'donations.clinic', '=', 'clinics.id')
      ->select('donations.created_at', 'clinics.name', 'donations.volume')->where('donations.donorId', '=' , $id)->get();
      return view('donors.donor-history', ['history' => $history]);
    }

    function donorProfile($id){
      $donor =  new Donor();
      $profile = $donor->where('national_id', $id)->first();
      $donorAge = $this->getAge($profile->dob);

      return view('donors.donor-profile', ['profile' => $profile, 'donorAge' => $donorAge]);
    }



    public function newDonorPage( )
    {
        return view('donors.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $password = Hash::make(request('national_id'));
        Donor::create(
          [
            'name' => request('name'),
            'location' => request('location'),
            'national_id' => request('national_id'),
            'gender' => request('gender'),
            'dob' => request('dob'),
            'blood_group' => request('blood_group'),
            'health_status' => request('health_status'),
            'marital_status' => request('marital_status'),
            'phone' => request('phone'),
            'password' => $password
          ]
        );
        $donor = new Donor();
        $smsHelper = new SMSHelper();
        if ($donor->where('phone', request('phone'))->exists()) {
        $smsHelper->sendSMS(request('phone'), "Hello, ". request('name')." , your account has been successfully created.");
        }

        return redirect()->route('createDonor');
    }

    public function view()
    {

        $donors = Donor::all();
        return view('donors.index', ['donors' => $donors]);
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('donors.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
      $password = Hash::make(request('national_id'));
      $donor = new Donor();
      $donor->where('id', request('id'))->update(
        ['name' => request('name'),
        'location' => request('location'),
        'national_id' => request('national_id'),
        'gender' => request('gender'),
        'dob' => request('dob'),
        'blood_group' => request('blood_group'),
        'health_status' => request('health_status'),
        'marital_status' => request('marital_status'),
        'phone' => request('phone'),
        'password' => $password]
      );
      return redirect()->route('viewClinics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
      $donor = new Donor();
      $donor->findOrFail(request('id'))->delete();
      return redirect()->route('viewDonors');
    }

}
