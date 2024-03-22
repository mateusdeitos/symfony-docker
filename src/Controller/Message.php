<?php

namespace App\Controller;

class Message {
    public function __construct(private string $message) {}

    public function getMessage(): string {
        return $this->message;
    }
}
