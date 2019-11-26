<?php

namespace Symflex\Library\Jwt\Token;

/**
 * Interface Signature
 * @package Symflex\Library\Jwt\Token
 */
interface Signature
{
    /**
     * @return string
     */
    public function signature(): string;
}