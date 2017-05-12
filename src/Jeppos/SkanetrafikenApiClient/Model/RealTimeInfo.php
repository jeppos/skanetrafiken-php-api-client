<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RealTimeInfo
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("RealTimeInfo")
 */
class RealTimeInfo
{
    /**
     * Stop Point deviation from timetable (on departure side).
     * Information about new Stop Point
     *
     * @var null|string
     *
     * @Serializer\SerializedName("NewDepPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $newDepartureStopPoint;
    /**
     * Stop Point deviation from timetable (on arrival side).
     * Information about new Stop Point
     *
     * @var null|string
     *
     * @Serializer\SerializedName("NewArrPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $newArrivalStopPoint;
    /**
     * Deviation from timetable time in min. (on departure side).
     * Delays are positive integer values and earlier times are negative.
     *
     * @var null|int
     *
     * @Serializer\SerializedName("DepTimeDeviation")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $departureTimeDeviation;
    /**
     * Describes how departure time deviation affects the journey.
     *
     * @var null|RealTimeAffect
     *
     * @Serializer\SerializedName("DepDeviationAffect")
     * @Serializer\XmlElement()
     * @Serializer\Type("enum<Jeppos\SkanetrafikenApiClient\Model\RealTimeAffect, string>")
     */
    protected $departureDeviationAffect;
    /**
     * Deviation from timetable time in min. (on arrival side).
     * Delays are positive integer values and earlier times are negative.
     *
     * @var null|int
     *
     * @Serializer\SerializedName("ArrTimeDeviation")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $arrivalTimeDeviation;
    /**
     * Describes how arrival time deviation affects the journey.
     *
     * @var null|RealTimeAffect
     *
     * @Serializer\SerializedName("ArrDeviationAffect")
     * @Serializer\XmlElement()
     * @Serializer\Type("enum<Jeppos\SkanetrafikenApiClient\Model\RealTimeAffect, string>")
     */
    protected $arrivalDeviationAffect;
    /**
     * Denotes if vehicle run is canceled.
     * This event can impact the whole journey
     *
     * @var null|bool
     *
     * @Serializer\SerializedName("Canceled")
     * @Serializer\XmlElement()
     * @Serializer\Type("boolean")
     */
    protected $canceled;

    /**
     * @return null|string
     */
    public function getNewDepartureStopPoint(): ?string
    {
        return $this->newDepartureStopPoint;
    }

    /**
     * @return null|string
     */
    public function getNewArrivalStopPoint(): ?string
    {
        return $this->newArrivalStopPoint;
    }

    /**
     * @return int|null
     */
    public function getDepartureTimeDeviation(): ?int
    {
        return $this->departureTimeDeviation;
    }

    /**
     * @return null|RealTimeAffect
     */
    public function getDepartureDeviationAffect(): ?RealTimeAffect
    {
        return $this->departureDeviationAffect;
    }

    /**
     * @return int|null
     */
    public function getArrivalTimeDeviation(): ?int
    {
        return $this->arrivalTimeDeviation;
    }

    /**
     * @return null|RealTimeAffect
     */
    public function getArrivalDeviationAffect(): ?RealTimeAffect
    {
        return $this->arrivalDeviationAffect;
    }

    /**
     * @return bool|null
     */
    public function isCanceled(): ?bool
    {
        return $this->canceled;
    }
}
