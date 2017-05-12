<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class WebLink
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("WebLink")
 */
class WebLink
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("URL")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
