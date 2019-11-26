<?php

namespace Symflex\Library\Jwt\Token;

/**
 * Class PayloadSection
 * @package Symflex\Library\Jwt\Token
 */
class PayloadSection implements Payload
{
    /**
     * @var
     */
    private array $payload;

    /**
     * @var
     */
    private string $encoded;

    /**
     * PayloadSection constructor.
     * @param array $payload
     * @param string $encoded
     */
    public function __construct(
        array $payload,
        string $encoded
    ) {
        $this->payload    = $payload;
        $this->encoded = $encoded;
    }

    /**
     * @return array
     */
    public function payload(): array
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}
