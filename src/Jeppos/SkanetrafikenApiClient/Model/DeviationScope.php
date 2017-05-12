<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class DeviationScope
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("DeviationScope")
 */
class DeviationScope
{
    /**
     * @var ScopeAttributeType
     *
     * @Serializer\SerializedName("ScopeAttribute")
     * @Serializer\XmlElement()
     * @Serializer\Type("enum<Jeppos\SkanetrafikenApiClient\Model\ScopeAttributeType, string>")
     */
    protected $scopeAttribute;
    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("FromDateTime")
     * @Serializer\XmlElement()
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s', 'Europe/Stockholm'>")
     */
    protected $fromDateTime;
    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("ToDateTime")
     * @Serializer\XmlElement()
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s', 'Europe/Stockholm'>")
     */
    protected $toDateTime;

    /**
     * @return ScopeAttributeType
     */
    public function getScopeAttribute(): ScopeAttributeType
    {
        return $this->scopeAttribute;
    }

    /**
     * @return \DateTime
     */
    public function getFromDateTime(): \DateTime
    {
        return $this->fromDateTime;
    }

    /**
     * @return \DateTime
     */
    public function getToDateTime(): \DateTime
    {
        return $this->toDateTime;
    }
}
