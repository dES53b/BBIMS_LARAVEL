@extends('layouts.app')
@include('alerts.clinic')
@include('alerts.donor')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send alerts') }}</div>

                <div class="card-body">
                    <a  class="btn btn-primary" data-toggle ="modal" data-target= '#clinicAlert' >Alert clinic</a>
                    <a  class="btn btn-primary" data-toggle ="modal" data-target= '#donorAlert' >Alert donor</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
