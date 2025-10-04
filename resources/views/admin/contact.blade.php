@extends('layout.template')
@section('title', 'Contact Us')
@section('header')
    <h1>Welcome to the Contact Us Page</h1>
@endsection
@section('content1')
<div class="center">
    <h2>Contact Us</h2>          
      <p>Email:<b> {{ $email }}</b></p>
      <p>Phone: <b>{{ $phone }}</b></p>
      <p>Address: <b>{{ $address }}</b></p>
      <p>If you have any questions, feel free to contact us!</p>
</div>
@endsection