<?php

namespace App\Http\WebhooksHandlers;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class AiGameTelegramBotWebHookHandler extends WebhookHandler
{
    public function hello()
    {
        $this->reply('Hello!');
    }
}
