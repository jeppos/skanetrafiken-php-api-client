<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Consistence\Enum\Enum;

/**
 * Class ScopeAttributeType
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
class ScopeAttributeType extends Enum
{
    const CONCERNS_DEPARTURE = 'CONCERNS_DEPARTURE';
    const CONCERNS_ARRIVAL = 'CONCERNS_ARRIVAL';
    const CONCERNS_LINE = 'CONCERNS_LINE';
    const CONCERNS_DEPARTURE_ARRIVAL = 'CONCERNS_DEPARR';
}
