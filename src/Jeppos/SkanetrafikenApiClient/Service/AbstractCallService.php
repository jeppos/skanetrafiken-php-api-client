<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerInterface;

/**
 * Class AbstractCallService
 * @package Jeppos\SkanetrafikenApiClient\Service
 */
abstract class AbstractCallService
{
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var SerializerInterface
     */
    protected $serializer;
    /**
     * @var array
     */
    protected $options = [];
    /**
     * @var Response
     */
    protected $response;

    /**
     * AbstractCallService constructor.
     * @param ClientInterface $client
     * @param SerializerInterface $serializer
     */
    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function call()
    {
        $this->response = $this->client->request(
            'GET',
            $this->getUrl() . '?' . http_build_query($this->options)
        );

        return $this;
    }

    public function getResponse()
    {
        return $this->serializer->deserialize(
            $this->getXmlFromResponse(),
            $this->getResponseClass(),
            'xml'
        );
    }

    /**
     * @return string
     */
    private function getXmlFromResponse(): string
    {
        $xml = simplexml_load_string(
            $this->response->getBody()->getContents(),
            null,
            null,
            'http://schemas.xmlsoap.org/soap/envelope/'
        );

        $namespaces = $xml->getNamespaces(true);
        $soap = $xml->children($namespaces['soap']);

        /** @var \SimpleXMLElement $response */
        $response = $soap->Body->children($namespaces['']);

        return $response->asXML();
    }

    /**
     * @return string
     */
    abstract protected function getResponseClass(): string;

    /**
     * @return string
     */
    abstract protected function getUrl(): string;
}
