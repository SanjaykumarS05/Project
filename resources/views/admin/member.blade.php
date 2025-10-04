@extends('layout.template')
@section('title', 'Member Page')

@section('header')
    <h1>Welcome to the Member Page</h1>
@endsection

@section('content1')
    <h2>Member List</h2>
    <br>
    <div class="container1">
        <table border="1" cellpadding="10" cellspacing="0"
               style="border-collapse: collapse; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Contact Number</th>
                    <th>School/College</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->dob }}</td>
                        <td>{{ $member->contact }}</td>
                        <td>{{ $member->school_college }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>  
                            <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?  ')">Delete</a>  
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No members found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@include('style.formstyle')