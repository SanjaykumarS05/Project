@extends('layout.template')
@include('style.formstyle')

@section('title', 'Member Count')
@section('header')
<h1>Welcome to Member Count Page</h1>
@endsection

@section('content1')
<h2>Member Count List</h2><br>
<p><b>Total Members: <span id="totalMembers">{{ $totalMembers }}</span></b></p><br>

<label for="login_id">Filter by Login:</label>
<select id="login_id">
    <option value="">-- All Logins --</option>
    @foreach($logins as $login)
        <option value="{{ $login->id }}" 
            {{ (isset($selectedLoginId) && $selectedLoginId == $login->id) ? 'selected' : '' }}>
            {{ $login->username }}

        </option>
    @endforeach
</select><br><br>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Contact</th>
            <th>School/College</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="membersTable">
        @forelse($members as $member)
            <tr>
                <td>{{ $loop->iteration }}</td>
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
        @empty
            <tr>
                <td colspan="7">No members found for this login.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#login_id').change(function(){
        var login_id = $(this).val();
        
        $.ajax({
            url: "{{ route('members.count') }}",
            type: 'GET',
            data: { login_id: login_id },
            success: function(response) {
                $('#totalMembers').text(response.totalMembers);
                var rows = '';
                if(response.members.length > 0){
                    $.each(response.members, function(index, member){
                        rows += '<tr>';
                        rows += '<td>' + (index+1) + '</td>';
                        rows += '<td>' + member.name + '</td>';
                        rows += '<td>' + member.email + '</td>';
                        rows += '<td>' + member.dob + '</td>';
                        rows += '<td>' + member.contact + '</td>';
                        rows += '<td>' + member.school_college + '</td>';
                        rows += '<td>';
                        rows += '<a href="{{ route('members.edit', $member->id) }}" class="button1">Edit</a>';
                        rows += '<a href="{{ route('members.destroy', $member->id) }}" class="button2">Delete </a>';
                        rows += '</td>';
                        rows += '</tr>';
                    });
                } else {
                    rows = '<tr><td colspan="7">No members found for this login.</td></tr>';
                }
                $('#membersTable').html(rows);
            }
        });
    });
</script>
@endsection
