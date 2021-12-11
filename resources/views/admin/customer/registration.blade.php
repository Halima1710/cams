@extends('admin.master')

@section('main')

<h1>Registration Form</h1>

@csrf

<form action="">
<div class="form-group">
    <label for="name"> Name:</label>
    <input type="name"  placeholder="enter your name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email"> Email:</label>
    <input type="email"  placeholder="enter your email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="mobile"> Mobile:</label>
    <input type="mobile"  placeholder="enter your mobile" class="form-control" id="mobile">
  </div>
  
  <div class="form-group">
    <label for="address"> Address:</label>
    <input type="address"  placeholder="enter your address" class="form-control" id="address">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" placeholder="enter your password" class="form-control"id="password">
</div>
<div class="form-group">
  <label for="confirm password"> Confirm Password:</label>
  <input type="confirm password" placeholder="enter your confirm password" class="form-control"id="confirm password">
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection