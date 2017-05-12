<?php

namespace Jeppos\SkanetrafikenApiClient\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Deviation
 * @package Jeppos\SkanetrafikenApiClient\Model
 * @Serializer\XmlRoot("Deviation")
 */
class Deviation
{
    /**
     * @var ArrayCollection|DeviationScope[]
     *
     * @Serializer\SerializedName("DeviationScopes")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="DeviationScope")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\DeviationScope>")
     */
    protected $deviationScopes;
    /**
     * @var string
     *
     * @Serializer\SerializedName("PublicNote")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $publicNote;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Header")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $header;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Details")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $details;
    /**
     * @var string
     *
     * @Serializer\SerializedName("Summary")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $summary;
    /**
     * @var string
     *
     * @Serializer\SerializedName("ShortText")
     * @Serializer\XmlElement()
     * @Serializer\Type("string")
     */
    protected $shortText;
    /**
     * @var int
     *
     * @Serializer\SerializedName("Importance")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $importance;
    /**
     * @var int
     *
     * @Serializer\SerializedName("Influence")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $influence;
    /**
     * @var int
     *
     * @Serializer\SerializedName("Urgency")
     * @Serializer\XmlElement()
     * @Serializer\Type("integer")
     */
    protected $urgency;
    /**
     * @var ArrayCollection|WebLink[]
     *
     * @Serializer\SerializedName("WebLinks")
     * @Serializer\XmlList(namespace="http://www.etis.fskab.se/v1.0/ETISws", entry="WebLink")
     * @Serializer\Type("ArrayCollection<Jeppos\SkanetrafikenApiClient\Model\WebLink>")
     */
    protected $webLinks;

    /**
     * @return ArrayCollection|DeviationScope[]
     */
    public function getDeviationScopes(): ArrayCollection
    {
        return $this->deviationScopes;
    }

    /**
     * @return string
     */
    public function getPublicNote(): string
    {
        return $this->publicNote;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * SMS Text
     *
     * @return string
     */
    public function getShortText(): string
    {
        return $this->shortText;
    }

    /**
     * @return int
     */
    public function getImportance(): int
    {
        return $this->importance;
    }

    /**
     * @return int
     */
    public function getInfluence(): int
    {
        return $this->influence;
    }

    /**
     * @return int
     */
    public function getUrgency(): int
    {
        return $this->urgency;
    }

    /**
     * @return ArrayCollection|WebLink[]
     */
    public function getWebLinks()
    {
        return $this->webLinks;
    }
}
