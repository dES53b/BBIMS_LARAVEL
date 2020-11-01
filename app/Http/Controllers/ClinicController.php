<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
alerts
use App\Models\Clinic;

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



    function create()
    {
      // code...
      Clinic::create(
        ['name' => request('name'),
         'password' => request('password'),
         'username' => request('username'),
         'location' => request('location')]
      );

      return redirect()->back();
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
use App\Clinic;
use App\Donor;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Donor::create(
            ['national_id' => request('national_id'),
             'name' => request('name'),
             'gender' => request('gender'),
             'marital_status' => request('marital_status'),
             'date_of_birth' => request('date_of_birth'),
             'location' => request('location'),
             'phone_number' => request('phone_number'),
             'health_status' => request('health_status')]
          );
    
          return redirect()->back();
        //
    }

    /**
     * Store a newly created resource in storage.
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
