<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Consistence\Enum\Enum;

/**
 * Class PointType
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
class PointType extends Enum
{
    const STOP_AREA = 'STOP_AREA';
    const ADDRESS = 'ADDRESS';
    const POI = 'POI';
    const UNKNOWN = 'UNKNOWN';
}
