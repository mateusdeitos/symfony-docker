<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpStamp;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController {

    public function __construct(private MessageBusInterface $messageBus)
    {

    }

    #[Route(path: '/', name: 'index')]
    public function index() {

        for ($i=0; $i < 10; $i++) {
            $envelope = new Envelope(new Message("Message '$i'"), [
                new AmqpStamp('opa')
            ]);
            $this->messageBus->dispatch($envelope);
        }

        return new JsonResponse(["message" => "ok"]);
    }
}
