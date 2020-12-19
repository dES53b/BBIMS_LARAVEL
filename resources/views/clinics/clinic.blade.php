@extends('layouts.clinic_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Clinic Dashboard') }}</div>

                <div class="card-body">
                    <p>Useful Links</p>
                    <div class="">
                      <ul style="list-style: none;">
                        <li  style=" display: inline; margin-right: 10px"> <a href="{{url('/donor/new')}}">Create donor</a> </li>
                        <li  style="display: inline; margin-right: 10px"> <a href="{{route('viewDonors')}}">View donors</a> </li>
                      {{-- <li  style="display: inline; margin-right: 10px"> <a href="{{route('newAlerts')}}">Send Alerts</a> </li> --}}

                      </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
