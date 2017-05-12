<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

use Consistence\JmsSerializer\Enum\EnumSerializerHandler;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\Handler\HandlerRegistry;
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
     * @var Response
     */
    protected $response;

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
        $this->response = $this->client->request(
            'GET',
            $this->getUrl() . '?' . http_build_query($this->options)
        );

        return $this;
    }

    public function getResponse()
    {
        $serializer = SerializerBuilder::create()
            ->addDefaultHandlers()
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new EnumSerializerHandler());
            })
            ->build();

        return $serializer->deserialize($this->getXmlFromResponse(), $this->getResponseClass(), 'xml');
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
    protected abstract function getResponseClass(): string;

    /**
     * @return string
     */
    protected abstract function getUrl(): string;
}
