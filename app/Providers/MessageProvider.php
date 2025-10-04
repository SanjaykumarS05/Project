<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;
use App\Services\MessageService;

class MessageProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public function register(): void
    {
        $this->app->bind(MessageService::class, function ($app) {
            $client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));
            return new MessageService($client);

        });

    }

    /**
     * Bootstrap services.
     */
    
    public function boot(): void
    {
        //
    }
}
