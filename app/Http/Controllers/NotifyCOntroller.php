<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\MailNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Login;
use App\Models\Notify;

class NotifyController extends Controller
{
    public function index()
    {
        $logins = Login::all();
        return view('notify.notification', compact('logins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:10|max:10',
            'message' => 'required|string',
            'login_id' => 'required|exists:logins,id'
        ]);

        $data = $request->only(['name','phone','message']);
        Notify::create($data);

        $user = Login::findOrFail($request->login_id);

        if (empty($user->email)) {
            return redirect()->back()->with('error', 'Selected user has no email.');
        }

        $user->notify(new MailNotification($data));

        return redirect()->back()->with('success', 'Notification sent successfully!');
    }
}
