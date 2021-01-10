@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send alerts') }}</div>

                <div style="padding-left: 50px" class="card-body">
                    <a style="color: white; margin-right: 10px" class="btn btn-primary" href="{{url('/alerts/alertclinic')}}">Alert clinic</a>
                    <a style="color: white" class="btn btn-primary" href="{{url('/alerts/alertdonor')}}" >Alert donor</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
