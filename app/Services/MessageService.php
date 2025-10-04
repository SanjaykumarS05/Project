<?php

namespace App\Services;

use Twilio\Rest\Client;

class MessageService   // <-- plural "Services"
{
    protected $client;
    protected $from;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->from = env('TWILIO_PHONE');
    }

    public function sendMessage(string $to, string $body)
    {
        return $this->client->messages->create($to, [
            'from' => $this->from,
            'body' => $body,
        ]);
    }
}


