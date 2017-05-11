<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerBuilder;

/**
 * Class AbstractCallService
 * @package Jeppos\SkanetrafikenApiClient\Service
 */
abstract class AbstractCallService
{
    /**
     * @var Client
     */
    protected $client;
    /**
     * @var array
     */
    protected $options = [];

    /**
     * AbstractCallService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function call()
    {
        $url = 'http://www.labs.skanetrafiken.se/v2.2/' . $this->getUrl();
        $response = $this->client->request('GET', $url . '?' . http_build_query($this->options));

        $xmlFromSoapResponse = $this->getXmlFromSoapResponse($response);

        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($xmlFromSoapResponse, $this->getResponseClass(), 'xml');
    }

    /**
     * @param Response $response
     * @return string
     */
    private function getXmlFromSoapResponse(Response $response): string
    {
        $xml = simplexml_load_string(
            $response->getBody()->getContents(),
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
    protected abstract function getResponseClass(): string;

    /**
     * @return string
     */
    protected abstract function getUrl(): string;
}
