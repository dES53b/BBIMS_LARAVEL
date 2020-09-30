@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>LOGIN/REGISTER</h1>
      <div class='row'>
        <div class='col-sm-4' style='background-color:lavender;'>
        <div class="card" style="width:400px">
        <img class="card-img-top" src="/imgs/admin_login.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">ADMINISTRATOR LOGIN</h4>
          
          <a href="" class="btn btn-primary">LOGIN</a>
        </div>
      </div>
        </div>
        <div class='col-sm-4' style='background-color:lavenderblush;'>
        <div class="card" style="width:400px">
        <img class="card-img-top" src="/imgs/user_login.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">CLINIC LOGIN/SIGN UP</h4>
         
          <p><a href="#" class="btn btn-primary">REGISTER</a><a href="#" class="btn btn-primary">LOGIN</a></p>
        </div>
      </div>
        </div>
      </div>
      </div>
@endsection    