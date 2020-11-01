@extends('layouts.app')

@section('content')

<table border = "1">
<tr>
<td>donor_id</td>
<td>national_id</td>
<td>name</td>
<td>gender</td>
<td>marital_status</td>
<td>date of birth</td>
<td>location</td>
<td>phone_number</td>
<td>health_status</td>
</tr>
<tbody>
    @foreach($donors as $donor)
    
    <tr>
      <td>{{$donor->id}}</td>
      <td>{{$donor->national_id}}</td>
      <td>{{$donor->name}}</td>
      <td>{{$donor->gender}}</td>
      <td>{{$donor->imarital_status}}</td>
      <td>{{$donor->date_of_birth}}</td>
      <td>{{$donor->locationj}}</td>
      <td>{{$donor->phone_number}}</td>
      <td>{{$donor->health_status}}</td>
      <td> <div style="">

        <a  style="float: left;"class="btn btn-primary" href="{{route('updateDonor', $clinic->id)}}">Update</a>
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