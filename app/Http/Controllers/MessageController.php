<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MessageService;

class MessageController extends Controller
{
    protected $messageService;

    // Inject MessageServices (resolved by the provider)
    

    public function index()
    {
        return view('notify.message');
    }

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'to' => 'required|string',
            'body' => 'required|string|min:10',
        ]);
        $this->messageService->sendMessage($validated['to'], $validated['body']);

        return redirect()->route('message.index')->with('success', 'Message sent successfully!');
    }
}
