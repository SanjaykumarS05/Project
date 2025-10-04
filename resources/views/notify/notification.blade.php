@extends('layout.template')
@include('style.formstyle')
@section('title', 'Email')

@section('header')
    <h1>Add New Member</h1>
@endsection

@section('content1')
<h1>Notification</h1>
    <h2>Send Notification Email</h2>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Phone Number"  maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="{{ old('phone') }}" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Message" required>{{ old('message') }}</textarea>

        <label for="login_id">Email Sent To:</label>
        <select name="login_id" required>
            <option value="">-- Select User --</option>
            @foreach($logins as $login)
                <option value="{{ $login->id }}" {{ old('login_id') == $login->id ? 'selected' : '' }}>
                    {{ $login->username }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="button3">Send</button>
    </form>
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
