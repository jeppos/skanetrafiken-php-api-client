<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

/**
 * Class ArrivalBoard
 * @package Jeppos\SkanetrafikenApiClient\Service
 */
class ArrivalBoard extends DepartureBoard
{
    protected $options = [
        'selDirection' => 1
    ];
}
