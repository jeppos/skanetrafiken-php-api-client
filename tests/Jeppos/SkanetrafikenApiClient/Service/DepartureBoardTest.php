<?php

namespace Tests\Jeppos\SkanetrafikenApiClient\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jeppos\SkanetrafikenApiClient\Model\DepartureArrivalResponse;
use Jeppos\SkanetrafikenApiClient\Service\DepartureBoard;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class DepartureBoardTest
 * @package Tests\Jeppos\SkanetrafikenApiClient\Service
 */
class DepartureBoardTest extends TestCase
{
    /**
     * @test
     */
    public function shouldSerializeResponseWithDepartureArrivalResponse()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ .'/../Mocks/stationresults_80000.xml')),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $serializerMock = $this->createMock(SerializerInterface::class);
        $departureArrivalResponseMock = $this->createMock(DepartureArrivalResponse::class);

        $serializerMock->method('deserialize')
            ->with(self::anything(), DepartureArrivalResponse::class, self::anything())
            ->willReturn($departureArrivalResponseMock);

        $sut = new DepartureBoard($client, $serializerMock);
        $sut->call();

        $actual = $sut->getResponse();

        $this->assertInstanceOf(DepartureArrivalResponse::class, $actual);
    }
}
