@extends('layout.master')
@section('content')
@section('title','new user')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <h1>new user</h1>
    <form method="POST" action="{{route('save.user')}}">
    @csrf
        <div class="mb-3">
        <p>{{session()->get('user_name')}}</p>
        <label  class="form-label">ID</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id">
      </div>
    <div class="mb-3">
        <label  class="form-label">name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="text" name="password" class="form-control"  placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DOB</label>
        <input type="date" name="dob" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">STATUS</label>
        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
</div>
<button>submit</button>
{{-- <a href="" class="btn btn-primary">Submit</a> --}}
</form>
@endsection
