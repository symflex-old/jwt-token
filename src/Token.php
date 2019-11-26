<?php

namespace Symflex\Library\Jwt;

use Symflex\Library\Jwt\Token\Header;
use Symflex\Library\Jwt\Token\Payload;
use Symflex\Library\Jwt\Token\Signature;

/**
 * Interface Token
 * @package Symflex\Library\Jwt
 */
interface Token
{
    /**
     * @return Header
     */
    public function header(): Header;

    /**
     * @return Payload
     */
    public function payload(): Payload;

    /**
     * @return Signature
     */
    public function signature(): Signature;

    /**
     * @param Token $token
     * @return bool
     */
    public function equals(Token $token): bool;
}
