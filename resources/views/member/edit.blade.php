@extends('layout.template')
@include('style.formstyle')
@section('title', 'Edit Member')

@section('header')
    <h1>Welcome to Edit Member Page</h1>
@endsection

@section('content1')
    <h2>Edit Member</h2>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $member->name }}" 
        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')"
        value="{{ old('name') }}">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ $member->email }}">
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" value="{{ $member->dob }}">
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" value="{{ $member->contact }}" 
        oninput="if (!this.value.startsWith('+91')) {
                    this.value = '+91' + this.value.replace(/[^0-9]/g, '');
                    } else {this.value = '+91' + this.value.slice(3).replace(/[^0-9]/g, '');
                }" maxlength="13">
        <label for="school_college">School/College:</label>
        <input type="text" name="school_college" id="school_college" value="{{ $member->school_college }}">
       <label for="login_id">Edited By (Login)</label>
        <select name="login_id" required>
            <option value="">-- Select Login --</option>
            @foreach($logins as $login)
                <option value="{{ $login->id }}" 
                    {{ (old('login_id') ?? $member->login_id) == $login->id ? 'selected' : '' }}>
                    {{ $login->username }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="button3">Update</button>
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





        // function validateForm() {
        //     let errors = [];
        //     let name = document.getElementById("name").value.trim();
        //     let email = document.getElementById("email").value.trim();
        //     let dob = document.getElementById("dob").value;
        //     let contact = document.getElementById("contact").value.trim();
        //     let school_college = document.getElementById("school_college").value.trim();
        //     if (!name || !email || !dob || !contact || !school_college) {
        //         toastr.error("Please fill in all required fields.");
        //         return false;
        //     }
        //     let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //     if (!emailPattern.test(email)) {
        //         errors.push("Please enter a valid email address.");
        //     }
        //     let birthDate = new Date(dob);
        //     let today = new Date();
        //     if (birthDate > today) {
        //         errors.push("Date of Birth cannot be in the future.");
        //     }
        //     let age = today.getFullYear() - birthDate.getFullYear();
        //     if (age < 20) {
        //         errors.push("You must be at least 20 years old.");
        //     }
        //     if (!/^\+91\d{10}$/.test(contact)) {
        //         errors.push("Contact number must start with +91 and be followed by exactly 10 digits.");
        //     }
        //     if (school_college.length < 5) {
        //         errors.push("School/College name should be at least 5 characters long.");
        //     }
        //     if (errors.length > 0) {
        //         errors.forEach(err => toastr.error(err));
        //         return false;
        //     }
        //     toastr.success("Form validated successfully!");
        //     return true;
        // }
    </script>
@endsection
