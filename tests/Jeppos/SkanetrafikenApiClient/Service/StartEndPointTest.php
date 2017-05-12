<?php

namespace Tests\Jeppos\SkanetrafikenApiClient\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jeppos\SkanetrafikenApiClient\Model\StartEndPointResponse;
use Jeppos\SkanetrafikenApiClient\Service\DepartureBoard;
use Jeppos\SkanetrafikenApiClient\Service\StartEndPoint;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class StartEndPointTest
 * @package Tests\Jeppos\SkanetrafikenApiClient\Service
 */
class StartEndPointTest extends TestCase
{
    /**
     * @test
     */
    public function shouldSerializeResponseWithStartEndPointResponse()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/../Mocks/querystation_malmo_soap.xml')),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $serializerMock = $this->createMock(SerializerInterface::class);
        $departureArrivalResponseMock = $this->createMock(StartEndPointResponse::class);

        $serializerMock->method('deserialize')
            ->with(
                file_get_contents(__DIR__ . '/../Mocks/querystation_malmo.xml'),
                StartEndPointResponse::class,
                'xml'
            )
            ->willReturn($departureArrivalResponseMock);

        $sut = new StartEndPoint($client, $serializerMock);
        $sut->call();

        $actual = $sut->getResponse();

        $this->assertInstanceOf(StartEndPointResponse::class, $actual);
    }
}
