@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>LOGIN/REGISTER</h1>
      <div class='row'>
        <div class='col-sm-4' style='background-color:lavender;'>
        <div class="card" style="width:400px">
        <img class="card-img-top" src="/imgs/admin_login.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">ADMINISTRATOR</h4>

          <a href="{{url('/login')}}" class="btn btn-primary" style="margin-right: 10px">LOGIN</a>
          <a href="{{url('/register')}}" class="btn btn-primary">REGISTER</a>
        </div>
      </div>
        </div>
        <div class='col-sm-4' style='background-color:lavenderblush;'>
        <div class="card" style="width:400px">
        <img class="card-img-top" src="/imgs/user_login.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">CLINIC</h4>

          <p><a href="{{url('/login')}}" class="btn btn-primary">LOGIN</a></p>
        </div>
      </div>

        </div>
        <div class='col-sm-4' style='background-color:lavenderblush;'>

      <div class="card" style="width:400px">
      <img class="card-img-top" src="/imgs/user_login.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">DONOR</h4>

        <p><a href="{{url('/login')}}" class="btn btn-primary" style="margin-right: 10px">LOGIN</a>
        </p>
      </div>
    </div>
        </div>
      </div>
      </div>
@endsection
