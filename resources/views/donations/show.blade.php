@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Donations') }}</div>

                <div class="card-body">

                    <div class="">

                      @php
                        $position = 0;
                      @endphp


                      <table>

                          <tr>
                            <th></th>
                            <th>Donors Name</th>
                            <th>Clinic</th>
                            <th>Donation Date</th>
                            <th>Next Donation</th>
                            <th style="padding: 10px">Actions</th>
                          </tr>


                        <tbody>
                          @foreach($donations as $donation)
                          @php
                          $position = $position + 1;
                          @endphp
                          <tr>
                            <td>{{$position}}</td>
                            <td>{{$donation->donorName}}</td>
                            <td>{{$donation->clinicName}}</td>
                            <td>{{$donation->created_at}}</td>
                            <td>{{$donation->nextDonation}}</td>
                            <td> <div style="">

                              <form style="float: right; margin-left: 10px;" action="{{route('deleteDonation')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$donation->id}}">
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
