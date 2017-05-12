<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class DepartureArrivalResponse
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot(name="GetDepartureArrivalResponse")
 */
class DepartureArrivalResponse implements ResponseInterface
{
    /**
     * @var DepartureArrivalResult
     *
     * @Serializer\SerializedName("GetDepartureArrivalResult")
     * @Serializer\XmlElement()
     * @Serializer\Type("Jeppos\SkanetrafikenApiClient\Model\DepartureArrivalResult")
     */
    protected $result;

    /**
     * @return DepartureArrivalResult
     */
    public function getResult(): DepartureArrivalResult
    {
        return $this->result;
    }
}
