<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Hash;
use App\Models\Donor;
use App\Clinic;
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

    function donorHome(){
      return view('donors.donor-home');
    }


    function sendSMS($phone, $name){
      $username = 'sandbox';
      $key = '1c69c9a7a5bf058bcaf59a5f695a1e915a0351e6d5c55e8edc398d81084dab6e';
    //  $from = 'Blood Bank Group';
      $africasTalking = new AfricasTalking($username, $key);
      $sms = $africasTalking->sms();

      try {
        $result = $sms->send([
          'to' => $phone,
          'message' => "Hello, ".$name." ,your account has been successfully created.",
          'from' => 'BBIMS'

        ]);
      } catch (\Exception $e) {

        echo $e->message;
      }
      return $result;



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
            'health_status' => request('health_status'),
            'marital_status' => request('marital_status'),
            'phone_number' => request('phone_number'),
            'password' => $password
          ]
        );
        $donor = new Donor();

        if ($donor->where('phone_number', request('phone_number'))->exists()) {
          $this->sendSMS(request('phone_number'), request('name'));
        }


    }

    public function view()
    {

        $donors = Donor::all();
        return view('donors.index', ['donors => $donors']);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
