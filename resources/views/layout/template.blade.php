<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @include('style.stylepage')
</head>
<body>
    <header>
        <div class="box">
        @yield('header')
        <div>
        @include('layout.navbar')
    </header>
    <main>
        <div class="content">
        @yield('content1')
        </div>
        @yield('scripts')
    </main>
    <footer>
        <p>&copy; 2025 Laravel Project. All rights reserved.</p>
    </footer>
</body>
</html>