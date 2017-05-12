<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FootNote
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("FootNote")
 */
class FootNote
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("Index")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $index;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Text")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $text;

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
