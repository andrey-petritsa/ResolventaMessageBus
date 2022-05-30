<?php

use Symfony\Component\Messenger\MessageBus;

class SymfonyMessageBusAdapter implements ResolventaMessageBus
{
    public function __construct(private MessageBus $bus) {}

    public function dispatch(object $command): void
    {
        $this->bus->dispatch($command);
    }
}
