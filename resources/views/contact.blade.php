@extends('layouts.main')
@push('title')
<title>contact us</title>
@endpush
@section('main-section')

<style>
    .container{
        width:70%;
    }
        </style>

<div class="bg-image"
     style="background-image: url('cricket_images/contact.jpg');
            background-repeat: no-repeat;  background-size: cover">

<h1 class="text-center">
    Contact us
</h1>
    <div class="container">
        <form>
    <div class="form-group ">
        <label for="inputAddress2">Name</label>
        <input type="text" class="form-control" id="inputname" placeholder="write your full name ">
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="write our full address ">
      </div>
    <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Ex. abc123@gmail.com">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Contact No</label>
      <input type="tel" class="form-control" id="inputcontact" placeholder="1234567890">
    </div>
    <div class="form-group">
        <label for="inputPassword4">Message</label>
        <input type="text" class="form-control" id="inputmessage" placeholder="write your message here">
      </div>
  <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
</div>
</div>
@endsection
