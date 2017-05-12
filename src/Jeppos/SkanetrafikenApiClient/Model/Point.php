<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Point
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("Point")
 */
class Point extends StopAreaData
{
    /**
     * @var int
     *
     * @Serializer\SerializedName("Id")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $id;
    /**
     * @var PointType
     *
     * @Serializer\SerializedName("Type")
     * @Serializer\XmlElement()
     * @Serializer\Type("enum<Jeppos\SkanetrafikenApiClient\Model\PointType, string>")
     */
    protected $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return PointType
     */
    public function getType(): PointType
    {
        return $this->type;
    }
}
