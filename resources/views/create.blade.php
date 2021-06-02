@extends('layout')

@section('content')

<style>
body {
  background-image: url('https://wallpaperaccess.com/full/220728.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    .container {
      max-width: 400px;
      margin-left:150px;
    }
    .push-top {
      margin-top: 62px;
    }
    label{
        text-shadow:rgba(0, 0, 0, 1)0px 3px 10px;
    }
</style>

<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

<div class="card push-top justify-content-center" style="background-color: transparent; border:none; width:60%;">
  <div class="card-header text-light" style="border:none;">
<h2 style="text-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;">  &nbsp; &nbsp; Sign up</h2> 
  </div>

 
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group text-light">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control text-light" name="name" placeholder="Input your name" style="background-color:transparent; box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;"/>
          </div>
          <div class="form-group text-light">
              <label for="email">Email:</label>
              <input type="email" class="form-control text-light" name="email" placeholder="Input your email" style="background-color:transparent; box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;"/>
          </div>
          <div class="form-group text-light">
              <label for="phone">Phone:</label>
              <input type="tel" class="form-control text-light" name="phone" placeholder="Input phone number" style="background-color:transparent; box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;"/>
          </div>
          <div class="form-group text-light">
              <label for="password">Password:</label>
              <input type="password" class="form-control text-light" name="password" placeholder="Input your password" style="background-color:transparent; box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;"/>
          </div>
          <br>
          &nbsp; 
          &nbsp; 
          &nbsp; 
          &nbsp; 
          &nbsp; 
          
         <button type="submit" class="btn btn-block btn-outline-light" style="box-shadow:rgba(0, 0, 1, 1)0px 3px 10px;">Create User</button>
      </form>
  </div>
</div>
@endsection