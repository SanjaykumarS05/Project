<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
    @include('style.style')
    <div class="container">
        <form action="{{ route('admin.check') }}" method="post">
        @csrf
        <h1>Login Page</h1>
        <div class="input-group">
            <i class="material-icons">person</i>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>

        <div class="input-group">
            <i class="material-icons">email</i>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </div>

        <div class="input-group">
            <i class="material-icons">lock</i>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <!-- <input type="checkbox" onclick="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show Password -->
        </div>
        <div class="input-group">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="input-group">
            <button type="submit" class="submit">Login</button>
        </div>
        <p class="p1">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
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



    // function Login() {
    //     let username = document.getElementById("username").value.trim();
    //     let email = document.getElementById("email").value.trim();
    //     let password = document.getElementById("password").value;

    //     if (username === "" || email === "" || password === "") {
    //         toastr.error("Please fill in all fields.");
    //         return false;
    //     }
    //     const emailpattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     if (!emailpattern.test(email)) {
    //         toastr.error("Please enter a valid email address.");
    //         return false;
    //     }
    //     if (password.length < 8 || password.length > 12) {
    //         toastr.warning("Password must be between 8 and 12 characters.");
    //         return false;
    //     }
    //     return true;
    // }
    </script>
</body>
</html>
