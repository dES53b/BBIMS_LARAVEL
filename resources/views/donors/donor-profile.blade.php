@extends('layouts.donor_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    <p>Donor Profile Information</p>
                    <div class="">
                      <ul style="list-style: none;">

                        <li  style="margin-right: 10px">Name: {{$profile->name}}</li>
                        <li  style="margin-right: 10px">Age: {{$donorAge}}</li>
                        <li  style="margin-right: 10px">Id Number: {{$profile->national_id}}</li>
                        <li  style="margin-right: 10px">Blood Group: {{$profile->blood_group}}</li>
                        <li  style="margin-right: 10px">Phone Number: {{$profile->phone}}</li>
                        <li  style="margin-right: 10px">Marital Status: {{$profile->marital_status}}</li>
                      </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
