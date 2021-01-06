<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DonationController extends Controller
{

  public function index(){

    $donor = new Donor();
    $donors =  $donor->all();
    return view('donations.index', ['donors' => $donors]);
  }

  public function destroy(){
    $donation = new Donation();
    $donation->findOrFail(request('id'))->delete();
    return redirect()->route('viewDonations');
  }


  public function show(){
    $donation = new Donation();
    $donations = $donation->all();
    $donations = $donation
    ->join('clinics', 'donations.clinic', '=', 'clinics.id')
    ->join('donors', 'donations.donorId', '=', 'donors.id')
    ->select('donations.created_at', 'donations.volume', 'donations.nextDonation', 'clinics.name as clinicName', 'donors.name as donorName')->get();
    return view('donations.show', ['donations' => $donations]);
  }

  function store(){
    $currentDate = Carbon::now();
    $nextDonation = $currentDate->addDays(60);
    Donation::create(
      [
        'name' => request('name'),
        'clinic' => request('clinic'),
        'donorId' => request('donorId'),
        'volume' => request('volume'),
        'nextDonation' => $nextDonation,
      ]
    );

  return redirect()->route('donationsIndex');
  }


}
