<?php

namespace Symflex\Library\Jwt\Token;

/**
 * Interface Header
 * @package Symflex\Library\Jwt\Token
 */
interface Header
{
    /**
     * @return array
     */
    public function header(): array;
}
