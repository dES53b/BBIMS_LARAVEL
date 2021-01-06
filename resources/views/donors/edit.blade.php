@extends('layouts.clinic_layout')

@section('content')
<?php

echo Form::open(['url' => '/create/donor', 'method' =>'post']);
echo Form::label('donor_id', 'Donor ID: ');
   echo Form::number('donor_id','Donor ID');
   echo '<br/>';

   echo Form::label('national_id', 'National ID: ');
   echo Form::number('national_id', 'National ID');
   echo '<br/>';
   echo Form::label('name', 'Name:  ', 'placeholder', 'Enter name');
   echo Form::text('name', 'Name');
   echo '<br/>';
   echo Form::label('gender', 'Gender: ');
   echo Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'));
   echo '<br/>';
   echo Form::label('marital_status', 'Marital Status: ');
   echo Form::select('marital_status', array('Single' => 'Single', 'Taken' => 'Taken'));
   echo '<br/>';

   echo Form::label('date_of_birth', 'Date of Birth: ');
   echo Form::date('dob', 'Date of Birth');
   echo '<br/>';

   echo Form::label('location', 'Location: ');
   echo Form::select('location', array('Nairobi' => 'Nairobi', 'Kisumu' => 'Kisumu', 'Mombasa' => 'Mombasa', 'Nakuru' => 'Nakuru'));

   echo Form::label('blood_group', 'Blood Group ');
   echo Form::select('blood_group', array('A-' => 'A-', 'A+' => 'A+', 'B-' => 'B-', 'B+' => 'B+', 'AB-' => 'AB-', 'AB+' => 'AB+', 'O+' => 'O+', 'O-' => 'O-'));

   echo Form::label('phone', 'Phone Number: ');
   echo Form::number('phone', 'Phone Number');
   echo '<br/>';

   echo Form::label('health_status', 'Health Status: ');
   echo Form::select('health_status', array('V' => 'Valid', 'I' => 'Invalid'));
   echo '<br/>';


   echo Form::submit('Register');
echo Form::close();
?>

@endsection
