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
     * @var string
     *
     * @Serializer\SerializedName("Name")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $name;
    /**
     * @var int
     *
     * @Serializer\SerializedName("X")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $x;
    /**
     * @var int
     *
     * @Serializer\SerializedName("Y")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $y;

    /**
     * Stop area name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * X coordinate, RT90 system
     *
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Y coordinate, RT90 system
     *
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }
}
