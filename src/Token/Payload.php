<?php

namespace Symflex\Library\Jwt\Token;

/**
 * Interface Payload
 * @package Symflex\Library\Jwt\Token
 */
interface Payload
{
    /**
     * @return array
     */
    public function payload(): array;
}
