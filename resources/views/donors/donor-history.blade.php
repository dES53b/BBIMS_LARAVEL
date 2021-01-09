@extends('layouts.donor_layout')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Donation History') }}</div>

                <div class="card-body">
                    <p>Donation History</p>
                    <div class="">
                      @if(!$history->isEmpty())
                      @foreach($history as $historia)
                  <div style="border: 1px solid blue; border-radius: 10px; margin-bottom: 10px" class="">
                    <ul style="list-style: none;">
                      <li  style="margin-right: 10px">Donation date: {{$historia->created_at}}</li>
                      <li  style="margin-right: 10px">Clinic: {{$historia->name}}</li>
                      <li  style="margin-right: 10px">Volume: {{$historia->volume}}</li>
                    </ul>
                  </div>

                      @endforeach

                      @else
                      <p>No donation history found. Make a donation first.</p>
                      @endif
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
