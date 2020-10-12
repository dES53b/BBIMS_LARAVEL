
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ url('/alert/clinic') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="receiver" class="col-md-4 col-form-label text-md-right">{{ __('Choose Clinic') }}</label>

                            <div class="col-md-6">
                                <select class="" name="receiver" required>
                                  @foreach($clinics as $clinic)
                                  <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                                  @endforeach


                                </select>

                                @error('receiver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="security" class="col-md-4 col-form-label text-md-right">{{ __('Security status') }}</label>

                            <div class="col-md-6">
                                <input style="height: 40px" id="security" type="text" class="form-control @error('security') is-invalid @enderror" name="security" value="{{ old('security') }}" required autocomplete="security" autofocus>

                                @error('security')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pickup-time" class="col-md-4 col-form-label text-md-right">{{ __('Pickup Time') }}</label>

                            <div class="col-md-6">
                                <input id="pickup-time" type="time" class="form-control @error('pickup-time') is-invalid @enderror" name="pickup-time" value="{{ old('pickup-time') }}" required autocomplete="pickup-time" >

                                @error('pickup-time')
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

<script type="text/javascript">
if ($security->has('error') || $select_clinic->has('error') || $pickup-time->has('error') || ){
  //show modal
  getElementById('clinicAlert').modal('show');
}

</script>
