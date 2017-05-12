<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

use Jeppos\SkanetrafikenApiClient\Model\StartEndPointResponse;

/**
 * Class StartEndPoint
 * @package Jeppos\SkanetrafikenApiClient\Service
 * @method StartEndPointResponse getResponse()
 */
class StartEndPoint extends AbstractCallService
{
    /**
     * @param string $startPoint
     * @return StartEndPoint
     */
    public function setStartPoint(string $startPoint): StartEndPoint
    {
        $this->options['inpPointFr'] = $startPoint;

        return $this;
    }

    /**
     * @param string $endPoint
     * @return StartEndPoint
     */
    public function setEndPoint(string $endPoint): StartEndPoint
    {
        $this->options['inpPointTo'] = $endPoint;

        return $this;
    }

    /**
     * @return string
     */
    protected function getResponseClass(): string
    {
        return StartEndPointResponse::class;
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return 'querystation.asp';
    }
}
