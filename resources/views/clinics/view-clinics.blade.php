@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Clinics') }}</div>

                <div class="card-body">

                    <div class="">

                      @php
                        $position = 0;
                      @endphp


                      <table>

                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Location</th>
                            <th>Clinic Id</th>
                            <th style="padding: 10px">Actions</th>
                          </tr>


                        <tbody>
                          @foreach($clinics as $clinic)
                          @php
                          $position = $position + 1;
                          @endphp
                          <tr>
                            <td>{{$position}}</td>
                            <td>{{$clinic->name}}</td>
                            <td>{{$clinic->username}}</td>
                            <td>{{$clinic->location}}</td>
                            <td>{{$clinic->id}}</td>
                            <td> <div style="">

                              <a  style="float: left;"class="btn btn-primary" href="{{route('editClinic', $clinic->id)}}">Edit</a>
                              <form style="float: right; margin-left: 10px;" action="{{route('deleteClinic')}}" method="post">
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
