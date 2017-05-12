skanetrafiken-php-api-client
==
A simple Skånetrafiken PHP API client.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/11f57782e049471ba15ed0622cb1b108)](https://www.codacy.com/app/jeppos/skanetrafiken-php-api-client?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=jeppos/skanetrafiken-php-api-client&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/jeppos/skanetrafiken-php-api-client.svg?branch=master)](https://travis-ci.org/jeppos/skanetrafiken-php-api-client)

# Installation
Install with composer (not available yet)

```
composer require jeppos/skanetrafiken-php-api-client
```


# Usage

Following example shows how to get upcoming departures from Malmö C.

```php
use \Jeppos\SkanetrafikenApiClient\Service\DepartureBoard;

$guzzleClient = new \GuzzleHttp\Client([
    'base_uri' => 'http://www.labs.skanetrafiken.se/v2.2/' // Version 2.2 of Skånetrafiken API
]);

$departureBoard = new DepartureBoard($guzzleClient);
$departureBoard->setStopAreaId(80000); // 80000 = Malmö C
$departureBoard->call();

$response = $departureBoard->getResponse();
```
