@extends('layouts.clinic_layout')

@section('content')
<?php
echo Form::open(array('url' => 'foo/bar'));
   echo Form::number('donor_id','Donor ID');
   echo '<br/>';
   
   echo Form::number('national_id', 'National ID');
   echo '<br/>';

   echo Form::text('name', 'Name');
   echo '<br/>';
   
   echo Form::select('gender', array('M' => 'Male', 'F' => 'Female'));
   echo '<br/>';
   
   echo Form::select('marital_status', array('S' => 'Single', 'T' => 'Taken'));
   echo '<br/>';
   
   echo Form::select('gender', array('M' => 'Male', 'F' => 'Female'));
   echo '<br/>';

   echo Form::date('date_of_birth', 'Date of Birth');
   echo '<br/>';

   <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <select class="" name="location" required>
                                  <option value="nairobi">Nairobi</option>
                                  <option value="mombasa">Mombasa</option>
                                  <option value="kisumu">Kisumu</option>
                                  <option value="nakuru">Nakuru</option>
                                  <option value="eldoret">Eldoret</option>

                                </select>
   echo Form::number('phone_number', 'Phone Number');
   echo '<br/>';
   echo Form::select('health_status', array('V' => 'Invalid', 'I' => 'Invalid'));
   echo '<br/>';

  
   echo Form::submit('Register');
echo Form::close();
?>

@endsection
