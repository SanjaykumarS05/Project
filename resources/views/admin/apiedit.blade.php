@extends('layout.template')
@section('title', 'Api Enter')
@include('style.api')
@section('header')
    <h1>Edit API Entry</h1>
@endsection
@section('content1')
    <h1>Edit API Entry</h1>
    <form action="{{ route('api.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $data->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $data->email }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{ $data->password }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection