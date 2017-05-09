<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetDepartureArrivalResponse
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot(name="GetDepartureArrivalResult")
 */
class GetDepartureArrivalResponse
{
    /**
     * @var GetDepartureArrivalResult
     *
     * @Serializer\SerializedName("GetDepartureArrivalResult")
     * @Serializer\XmlElement()
     * @Serializer\Type("Jeppos\SkanetrafikenApiClient\Model\GetDepartureArrivalResult")
     */
    protected $result;

    /**
     * @return GetDepartureArrivalResult
     */
    public function getResult(): GetDepartureArrivalResult
    {
        return $this->result;
    }
}
