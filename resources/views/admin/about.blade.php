@extends('layout.template')
@section('title', 'About Us')
@section('header')
    <h1>Welcome to the About Us Page</h1>
@endsection

@section('content1')
<div class="center">
    <h2>About</h2>
    <p>Company:<b> {{ $company }}</b></p>
    <p>Address:<b> {{ $address }}</b></p>
</div>

@endsection
