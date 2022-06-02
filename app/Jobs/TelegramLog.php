<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use NotificationChannels\Telegram\Exceptions\CouldNotSendNotification;
use NotificationChannels\Telegram\Telegram;

class TelegramLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $message;
    public $channel;

    public function __construct($message)
    {
        $this->queue = 'telegram';
        $this->message = $message;
    }

    public function handle()
    {
        $telegram = new Telegram(config('services.telegram-bot-api.token'));

        try {
            $telegram->sendMessage([
                'chat_id' => config('services.telegram-bot-api.group'),
                'text' => $this->message,
                'parse_mode' => 'Markdown',
            ]);
        } catch (CouldNotSendNotification $e) {
            Log::error($e->getMessage());
        }
    }
}
