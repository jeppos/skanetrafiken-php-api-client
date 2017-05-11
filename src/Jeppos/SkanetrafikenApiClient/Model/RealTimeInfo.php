<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RealTimeInfo
 * @package Jeppos\SkanetrafikenApiClient\Model
 */
class RealTimeInfo
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("NewDepPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $newDeparturePoint;
    /**
     * @var string
     *
     * @Serializer\SerializedName("NewArrPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $newArrivalPoint;
    /**
     * @var int
     *
     * @Serializer\SerializedName("DepTimeDeviation")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $departureTimeDeviation;
    /**
     * @var string
     *
     * @Serializer\SerializedName("DepDeviationAffect")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $departureDeviationAffect;
    /**
     * @var int
     *
     * @Serializer\SerializedName("ArrTimeDeviation")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $arrivalTimeDeviation;
    /**
     * @var string
     *
     * @Serializer\SerializedName("ArrDeviationAffect")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $arrivalDeviationAffect;
    /**
     * @var bool
     *
     * @Serializer\SerializedName("Canceled")
     * @Serializer\XmlElement()
     * @Serializer\Type("boolean")
     */
    protected $canceled;

    /**
     * @return string
     */
    public function getNewDeparturePoint(): string
    {
        return $this->newDeparturePoint;
    }

    /**
     * @return string
     */
    public function getNewArrivalPoint(): string
    {
        return $this->newArrivalPoint;
    }

    /**
     * @return int
     */
    public function getDepartureTimeDeviation(): int
    {
        return $this->departureTimeDeviation;
    }

    /**
     * @return string
     */
    public function getDepartureDeviationAffect(): string
    {
        return $this->departureDeviationAffect;
    }

    /**
     * @return int
     */
    public function getArrivalTimeDeviation(): int
    {
        return $this->arrivalTimeDeviation;
    }

    /**
     * @return string
     */
    public function getArrivalDeviationAffect(): string
    {
        return $this->arrivalDeviationAffect;
    }

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->canceled;
    }
}
