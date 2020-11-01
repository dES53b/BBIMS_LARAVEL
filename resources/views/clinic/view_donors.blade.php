@extends('layouts.clinic_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Donors') }}</div>

                <div class="card-body">

                    <div class="">

                    <table>

                          <tr>
                            <th>Donor ID</th>
                            <th>Name</th>
                            <th>National ID</th>
                            <th>Gender</th>
                            <th>Marital Status</th>
                            <th>Date of Birth </th>
                            <th>Location</th>
                            <th>Phone Number</th>
                            <th>Health Status</th>
                            <th style="padding: 10px">Actions</th>
                          </tr>


                        <tbody>
                          @foreach($donors as $donor)
                          @php
                          $position = $position + 1;
                          @endphp
                          <tr>
                            
                            <td>{{$donor->id}}</td>
                            <td>{{$donor->name}}</td>
                            <td>{{$donor->national_id}}</td>
                            <td>{{$donor->gender}}</td>
                            <td>{{$donor->marital_status}}</td>
                            <td>{{$donor->date_of_birth}}</td>
                            <td>{{$donor->location}}</td>
                            <td>{{$donor->phone_number}}</td>
                            <td>{{$donor->health_status}}</td>
                            <td> <div style="">

                              <a  style="float: left;"class="btn btn-primary" href="{{route('updatedonor', $donor->id)}}">Edit</a>
                              <form style="float: right; margin-left: 10px;" action="{{route('deletedonor')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$clinic->id}}">
                                <button style="background-color: red" class="btn btn-primary" type="submit" name="button">Delete</button>
                              </form>

                            </div> </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>



                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
