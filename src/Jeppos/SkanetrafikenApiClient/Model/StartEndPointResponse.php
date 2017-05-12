<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StartEndPointResponse
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot(name="GetStartEndPointResponse")
 */
class StartEndPointResponse implements ResponseInterface
{
    /**
     * @var StartEndPointResult
     *
     * @Serializer\SerializedName("GetStartEndPointResult")
     * @Serializer\XmlElement()
     * @Serializer\Type("Jeppos\SkanetrafikenApiClient\Model\StartEndPointResult")
     */
    protected $result;

    /**
     * @return StartEndPointResult
     */
    public function getResult(): StartEndPointResult
    {
        return $this->result;
    }
}
