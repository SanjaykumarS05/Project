<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\login;

class MemberController extends Controller
{
    public function index()
    {
        $logins = login::all();
        $members = form::all();
        return view('member.index', compact('members', 'logins'));
    }


    public function create(Request $request)
    { 
        $logins = login::all();
        return view('member.create', compact('logins'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        form::create($data);
        return redirect()->route('members.index')->with('success', 'Member created successfully.');
    }

   public function edit($id)
    {
    $logins = login::all();
    $member = Form::findOrFail($id);
    return view('member.edit', compact('member', 'logins'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $member = form::findOrFail($id);
        $member->update($data);
        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    public function delete($id)
    {
        $member = form::findOrFail($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');

    }
   public function count(Request $request)
    {
        $logins = login::all();
        $login_id = $request->login_id;
        $membersQuery = Form::query();

        if ($login_id) {
            $membersQuery->where('login_id', $login_id);
        }
        $members = $membersQuery->get();
        $totalMembers = $members->count();

        return view('member.membercount', compact('totalMembers', 'members', 'logins', 'login_id'));
    }

}

