<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('response') }}">Response</a></li>
                <li><a href="{{ route('members.index') }}">Members</a></li>
                <li><a href="{{ route('admin.memory') }}">Memories</a></li>
                <li><a href="{{ route('index') }}">Notification</a></li>
                <li><a href="{{ route('message.index') }}">Message</a></li>
                <li><a href="{{ route('logout') }}" class="logout">Logout</a></li>
            </ul>
        </nav>
    </body>
</html>