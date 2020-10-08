@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <p>Useful Links</p>
                    <div class="">
                      <ul style="list-style: none;">
                        <li  style=" display: inline; margin-right: 10px"> <a href="{{url('/new/clinic')}}">Create clinic account</a> </li>
                        <li  style="display: inline; margin-right: 10px"> <a href="{{route('viewClinics')}}">View Clinics</a> </li>
                        <li  style="display: inline; margin-right: 10px"> <a href="#">Send Alerts</a> </li>

                      </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
