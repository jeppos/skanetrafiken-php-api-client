<?php

namespace Jeppos\SkanetrafikenApiClient\Service;

use Jeppos\SkanetrafikenApiClient\Model\DepartureArrivalResponse;

/**
 * Class DepartureBoard
 * @package Jeppos\SkanetrafikenApiClient\Service
 * @method DepartureArrivalResponse getResponse()
 */
class DepartureBoard extends AbstractCallService
{
    /**
     * @param int $stopAreaId
     * @return DepartureBoard
     */
    public function setStopAreaId(int $stopAreaId): DepartureBoard
    {
        $this->options['selPointFrKey'] = $stopAreaId;

        return $this;
    }

    /**
     * @param \DateTime $dateTime
     * @return DepartureBoard
     */
    public function setDateTime(\DateTime $dateTime): DepartureBoard
    {
        $this->options['inpDate'] = $dateTime->format('Y-m-d');
        $this->options['inpTime'] = $dateTime->format('H:i');

        return $this;
    }

    /**
     * @return string
     */
    protected function getResponseClass(): string
    {
        return DepartureArrivalResponse::class;
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return 'stationresults.asp';
    }
}
