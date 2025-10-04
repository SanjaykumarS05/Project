@extends('layout.template')
@include('style.formstyle')
@section('title', 'Message')

@section('header')
    <h1>Add New Message</h1>
@endsection

@section('content1')
<div class="container">
    <h1>Send a Message</h1>
    <form action="{{ route('message.send') }}" method="POST">
        @csrf
            <label for="to" class="form-label">To:</label>
            <input type="text" class="form-control" id="to" name="to" maxlength="14" value="+91 " oninput="this.value = this.value.replace(/[^0-9+ ]/g, '')" required>
            <label for="body" class="form-label">Message:</label>
            <textarea class="form-control" id="body" name="body" rows="3" oldvalue="{{ old('body') }}" required>{{ old('body') }}</textarea>
        <button type="submit" class="button3">Send Message</button>
    </form>
</div>
 <script>
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    </script>
@endsection