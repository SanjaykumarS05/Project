@extends('layout.template')
@section('title', 'Homepage')
@section('header')
    <h1>Welcome to the Rsoft Training</h1>
@endsection
@section('content1')
<div>
        <div class="center">
          <h2>Welcome</h2>
          <p>Explore our platform and discover tools designed to simplify your workflow. Whether you're managing data, building apps, or just browsing, we've got you covered.</p>
       </div>
    
      <div class="center">
        <a href="{{ route('about') }}"><h2>About</h2></a>
          <p><strong>Company:</strong> Rsoft Pvt. Ltd.</p>
        <p><strong>Address:</strong> Tidel Park, Pattabiram, Chennai, India</p>
        <p>We specialize in software development, training. 
           Our mission is to deliver technology solutions that empower individuals 
           and businesses to grow faster.</p>
      </div>
        <div class="center">
        <a href="{{ route('contact') }}"><h2>Contact</h2></a>
        <p><strong>Email:</strong> rsoftai@gmail.com</p>
        <p><strong>Phone:</strong> +91 77081 51456</p>
        <p><strong>Address:</strong> Pattabiram, Chennai, India</p>
        <p>If you have any questions or need assistance, feel free to reach out. 
           Our support team is available 24/7 to help you.</p>
      </div>
        
</div>
@endsection
