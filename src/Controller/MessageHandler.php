<?php

namespace App\Controller;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MessageHandler
{
    public function __invoke(Message $message)
    {
        sleep(3);
        echo $message->getMessage();
    }
}
