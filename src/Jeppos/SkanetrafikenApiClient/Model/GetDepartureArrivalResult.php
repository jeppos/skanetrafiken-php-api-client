<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetDepartureArrivalResult
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("GetDepartureArrivalResult")
 */
class GetDepartureArrivalResult
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
     * @var ArrayCollection|Line[]
     *
     * @Serializer\SerializedName("Lines")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="Line")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\Line>")
     */
    protected $lines;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return ArrayCollection
     */
    public function getLines(): ArrayCollection
    {
        return $this->lines;
    }
}
