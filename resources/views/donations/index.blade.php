@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a new donation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('newDonation')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select Donor') }}</label>

                            <div class="col-md-6">
                                <select class="" name="name" required>
                                  <option disabled value="nairobi">Select Donor</option>
                                  @foreach($donors as $donor)
                                  <option value="{{$donor->id}}">{{$donor->name}}</option>
                                  @endforeach

                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="clinicId" value= "{{Auth::guard('clinic')->user()->id}}" >
                        </div>

                        <div class="form-group row">
                            <label for="volume" class="col-md-4 col-form-label text-md-right">{{ __('Volume Donated (in Millilitres)') }}</label>

                            <div class="col-md-6">
                                <input id="volume" type="text" class="form-control @error('volume') is-invalid @enderror" name="volume" value="{{ old('volume') }}" required autocomplete="volume" >

                                @error('volume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Donation') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
