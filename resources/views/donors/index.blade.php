@extends('layouts.clinic_layout')

@section('content')

<table border = "1">
<tr>
<td>Donor Id</td>
<td>National Id</td>
<td>Name</td>
<td>Gender</td>
<td>Marital Status</td>
<td>Date of Birth</td>
<td>Location</td>
<td>Phone Number</td>
<td>Health Status</td>
<td>Actions</td>
</tr>
<tbody>
    @foreach($donors as $donor)

    <tr>
      <td>{{$donor->id}}</td>
      <td>{{$donor->national_id}}</td>
      <td>{{$donor->name}}</td>
      <td>{{$donor->gender}}</td>
      <td>{{$donor->marital_status}}</td>
      <td>{{$donor->dob}}</td>
      <td>{{$donor->location}}</td>
      <td>{{$donor->phone}}</td>
      <td>{{$donor->health_status}}</td>
      <td> <div style="">


        <form style="float: right; margin-left: 10px;" action="{{route('deleteDonor')}}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$donor->id}}">
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
