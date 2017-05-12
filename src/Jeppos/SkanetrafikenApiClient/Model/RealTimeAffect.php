<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Consistence\Enum\Enum;

/**
 * Class RealTimeAffect
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
class RealTimeAffect extends Enum
{
    const CRITICAL = 'CRITICAL';
    const NON_CRITICAL = 'NON_CRITICAL';
    const PASSED = 'PASSED';
    const NONE = 'NONE';
}
