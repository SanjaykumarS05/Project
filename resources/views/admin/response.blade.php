@extends('layout.template')
@section('title', 'Response Page')
@section('header')
    <h1>Welcome to Response Page</h1>
@endsection

@section('content1')
<h2>    Type's of Response</h2>
<div class="left">
<ol>
    <li class="li"><a href="{{ route('string') }}" class="a">Sting HTML Response</a></li>
    <li class="li"><a href="{{ route('redirect') }}" class="a">Redirect Response</a></li>
    <li class="li"><a href="{{ route('json') }}" class="a">Json Response</a></li>
    <li class="li"><a href="{{ route('custom') }}" class="a">Custom Response</a></li>
    <li class="li"><a href="{{ route('view') }}" class="a">Blade View Response</a></li>
    <li class="li"><a href="{{ route('api.index') }}" class="a">API Json Response</a></li>
</ol>
</div>
<script>
@if(session('success'))
        document.addEventListener("DOMContentLoaded", function() {
            toastr.success("{{ session('success') }}");
        });
    </script>
@endif
@endsection
@include('style.stylepage') 