<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Line
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("Line")
 */
class Line
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("Name")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $name;
    /**
     * @var integer
     *
     * @Serializer\SerializedName("No")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $number;
    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("JourneyDateTime")
     * @Serializer\XmlElement()
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s', 'Europe/Stockholm'>")
     */
    protected $journeyDateTime;
    /**
     * @var boolean
     *
     * @Serializer\SerializedName("IsTimingPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("boolean")
     */
    protected $timingPoint;
    /**
     * @var string
     *
     * @Serializer\SerializedName("StopPoint")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $stopPoint;
    /**
     * @var integer
     *
     * @Serializer\SerializedName("LineTypeId")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $typeId;
    /**
     * @var string
     *
     * @Serializer\SerializedName("LineTypeName")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $typeName;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Towards")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $towards;
    /**
     * @var ArrayCollection|RealTimeInfo[]
     *
     * @Serializer\SerializedName("RealTime")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="RealTimeInfo")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\RealTimeInfo>")
     */
    protected $realTime;
    /**
     * @var integer
     *
     * @Serializer\SerializedName("TrainNo")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $trainNumber;
    /**
     * @var integer
     *
     * @Serializer\SerializedName("RunNo")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $runNumber;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return \DateTime
     */
    public function getJourneyDateTime(): \DateTime
    {
        return $this->journeyDateTime;
    }

    /**
     * @return bool
     */
    public function isTimingPoint(): bool
    {
        return $this->timingPoint;
    }

    /**
     * @return string
     */
    public function getStopPoint(): string
    {
        return $this->stopPoint;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return $this->typeName;
    }

    /**
     * @return string
     */
    public function getTowards(): string
    {
        return $this->towards;
    }

    /**
     * @return ArrayCollection|RealTimeInfo[]
     */
    public function getRealTime(): ArrayCollection
    {
        return $this->realTime;
    }

    /**
     * @return int
     */
    public function getTrainNumber(): int
    {
        return $this->trainNumber;
    }

    /**
     * @return int
     */
    public function getRunNumber(): int
    {
        return $this->runNumber;
    }
}
