<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

/**
 * Interface ResultInterface
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
interface ResultInterface
{
    /**
     * Response code, 0 if successful operation
     *
     * @return int
     */
    public function getCode(): int;

    /**
     * Error message, empty if response code = 0
     *
     * @return string
     */
    public function getMessage(): string;
}
