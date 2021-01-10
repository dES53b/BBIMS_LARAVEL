@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alert donors location-wise') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/alert/donor')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Choose Location') }}</label>

                            <div class="col-md-6">
                                <select class="" name="location" required>
                                  @foreach($donorLocations as $donorLocation)
                                  <option value="{{$donorLocation->location}}">{{$donorLocation->location}}</option>
                                  @endforeach


                                </select>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Alert content') }}</label>

                            <div class="col-md-6">
                                <input style="height: 50px" id="venue" type="text" class="form-control @error('security') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send alert') }}
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
