@extends('layouts.donor_layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Donor Dashboard') }}</div>

                <div class="card-body">
                    <p>Useful Links</p>
                    <div class="">
                      <ul style="list-style: none;">

                        <li  style=" display: inline; margin-right: 10px"> <a href="{{route('viewProfile', ['id' => $donorId])}}">View Profile</a> </li>
                        <li  style="display: inline; margin-right: 10px"> <a href="{{route('viewHistory', ['id' => $donorId])}}">View Donation History</a> </li>
                        <li   style="display: inline; margin-top: 10px">  <p>Next Donation: {{$nextDonation}}</p> </li>




                      </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
