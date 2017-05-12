<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

/**
 * Interface ResponseInterface
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
interface ResponseInterface
{
    /**
     * @return ResultInterface
     */
    public function getResult();
}
