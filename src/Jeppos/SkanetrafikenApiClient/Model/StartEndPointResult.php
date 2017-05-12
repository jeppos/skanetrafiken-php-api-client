<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class StartEndPointResult
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @see http://www.labs.skanetrafiken.se/v2.2/GetStartEndPoint.xsd
 * @Serializer\XmlRoot("GetStartEndPointResult")
 */
class StartEndPointResult implements ResultInterface
{
    /**
     * @var int
     *
     * @Serializer\SerializedName("Code")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $code;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Message")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $message;
    /**
     * @var ArrayCollection|Point[]
     *
     * @Serializer\SerializedName("StartPoints")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="Point")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\Point>")
     */
    protected $startPoints;
    /**
     * @var ArrayCollection|Point[]
     *
     * @Serializer\SerializedName("EndPoints")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="Point")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\Point>")
     */
    protected $endPoints;
    /**
     * @var ArrayCollection|Point[]
     *
     * @Serializer\SerializedName("ViaPoints")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="Point")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\Point>")
     */
    protected $viaPoints;

    /**
     * @inheritdoc
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @inheritdoc
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return ArrayCollection|Point[]
     */
    public function getStartPoints(): ArrayCollection
    {
        return $this->startPoints;
    }

    /**
     * @return ArrayCollection|Point[]
     */
    public function getEndPoints(): ArrayCollection
    {
        return $this->endPoints;
    }

    /**
     * @return null|ArrayCollection|Point[]
     */
    public function getViaPoints(): ?ArrayCollection
    {
        return $this->viaPoints;
    }
}
