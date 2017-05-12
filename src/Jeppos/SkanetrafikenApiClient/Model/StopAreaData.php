<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StopAreaData
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("StopAreaData")
 */
class StopAreaData
{
    /**
     * Stop area name
     *
     * @var string
     *
     * @Serializer\SerializedName("Name")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $name;
    /**
     * X coordinate, RT90 system
     *
     * @var int
     *
     * @Serializer\SerializedName("X")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $x;
    /**
     * Y coordinate, RT90 system
     *
     * @var int
     *
     * @Serializer\SerializedName("Y")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $y;

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
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }
}
