@extends('layout.template')
@section('title', 'Api Page')
@include('style.api')
@section('header')
    <h1>Welcome to API Page</h1>
@endsection
@section('content1')
</table>
<h2 class="h2">Add New User</h2>

<form action="{{ route('api.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Add User</button>
</form>


<h2>API Json Response</h2>
<a href="{{ route('alluser') }}" class="a">Show All Users in Json</a>
<table>
    <tr>
        <th class="th">ID</th>
        <th class="th">Name</th>
        <th class="th">Email</th>
        <th class="th">Created At</th>
        <th class="th">Updated At</th>
        <th class="th">Action</th>
    </tr>
    @foreach($data as $user)
    <tr>
        <td class="td">{{ $user->id }}</td>
        <td class="td">{{ $user->name }}</td>
        <td class="td">{{ $user->email }}</td>
        <td class="td">{{ $user->created_at }}</td>
        <td class="td">{{ $user->updated_at }}</td>
        <td class="td">
            <a href="{{ route('api.show', $user->id) }}" class="a">View</a>
            <a href="{{ route('api.edit', $user->id) }}" class="a">Edit</a>
            <form action="{{ route('api.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="a" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>    

@endsection