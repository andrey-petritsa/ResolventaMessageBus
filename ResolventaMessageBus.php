<?php

interface ResolventaMessageBus
{
    public function dispatch(object $command): void;
}
