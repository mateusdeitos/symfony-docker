<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;

class LoggerService implements LoggerInterface {
    public function emergency(string|\Stringable $message, array $context = []): void {

    }
    public function alert(string|\Stringable $message, array $context = []): void {

    }
    public function critical(string|\Stringable $message, array $context = []): void {

    }
    public function error(string|\Stringable $message, array $context = []): void {

    }
    public function warning(string|\Stringable $message, array $context = []): void {

    }
    public function notice(string|\Stringable $message, array $context = []): void {

    }
    public function info(string|\Stringable $message, array $context = []): void {

    }
    public function debug(string|\Stringable $message, array $context = []): void {

    }
    public function log($level, string|\Stringable $message, array $context = []): void {

    }
}
