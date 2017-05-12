skanetrafiken-php-api-client
==
A simple Skånetrafiken PHP API client.

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
