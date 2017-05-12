<?php

namespace Jeppos\SkanetrafikenApiClient;

use Consistence\JmsSerializer\Enum\EnumSerializerHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Class SerializerFactory
 * @package Jeppos\SkanetrafikenApiClient
 */
class SerializerFactory
{
    /**
     * @return Serializer
     */
    public static function create(): Serializer
    {
        return SerializerBuilder::create()
            ->addDefaultHandlers()
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new EnumSerializerHandler());
            })
            ->build();
    }
}
