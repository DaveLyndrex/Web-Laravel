@extends('layout')

@section('content')

<style>
    body{
        background-image: url('https://wallpaperaccess.com/full/220728.jpg');
        background-attachment:fixed;
        background-size:cover;
        background-repeat:no-repeat;
    }
  .push-top {
    margin-top: 50px;
  }
  h2{
    text-shadow:rgba(0, 0, 0, 0.4) 0px 3px 5px;
  }
  #btn1{
    box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;
  }
</style>



<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <center>
    <h2 class="header text-center text-dark bg-light w-50" style="box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px;">ALL CREATED DATA</h2>
  </center>
  <a href="{{route('students.create')}}" type="button" id="btn1" class="btn btn-outline-light">Add New User</a>
  <br><br>
  
  <table class="table table-borderless bg-light text-dark" style="box-shadow:rgba(0, 0, 0, 1) 0px 3px 10px; border-radius: 0.5em;overflow: hidden;">
    <thead>
        <tr class="table-dark shadow p-3 mb-3 bg-dark rounded">
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
          <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" ><i class="fa fa-edit"></i></a>&nbsp;
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button style="border:none;background-color:transparent;" class="delete" name="delete"><i class="fa fa-trash" style="color:red;"></i></button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection