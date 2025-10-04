@extends('layout.template')
@include('style.formstyle')
@section('title', 'Member List')
@section('header')
    <h1>Welcome to Members List Page</h1>
@endsection
@section('content1')
    <h2 id="big">Member List</h2>
    <a href="{{ route('members.count') }}" class="new">Members Count</a>
    <a href="{{ route('members.create') }}" class="new">Add New Member</a>
    <table>
        <thead>
            <tr>
                <th>Created By</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Contact</th>
                <th>School/College</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr> 
                    <td>{{ $member->login->username ?? 'N/A'}}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->dob }}</td>
                    <td>{{ $member->contact }}</td>
                    <td>{{ $member->school_college }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member->id) }}" class="button1">Edit</a>
                        <a href="{{ route('members.destroy', $member->id) }}" class="button2">Delete </a>
                    </td>
                </tr>
            @endforeach
            @if($members->isEmpty())
                <tr>
                    <td colspan="7">No members found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
