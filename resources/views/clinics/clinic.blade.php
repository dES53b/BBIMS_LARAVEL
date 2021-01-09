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
                        <li  style="display: inline; margin-right: 10px"> <a href="{{route('viewDonations')}}">View donations</a> </li>


                      </ul>
                    </div>

                    <p style="">My Alerts</p>
                    <div class="">
                      @if(!$alerts->isEmpty())
                      @foreach($alerts as $alert)
                      <div class="" style=" border: 2px solid yellow; border-radius: 10px">
                        <ul style="list-style: none;">
                          <li>Date: {{$alert->created_at}}</li>
                          <li>Security Status:{{$alert->security}}  </li>
                          <li>Pickup Time: {{$alert->pickup_time }}</li>
                        </ul>
                      </div>
                      @endforeach
                      @else
                      <div class="" style="border: 2px solid red">
                        <p>No alerts found</p>
                      </div>
                      @endif

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
