<?php



require "vendor/autoload.php";

$access_token = 'UEN/hxGAhGiWLRaIKV7zh88vV/cYkTSl/r5h3GV4f5GNftnbd3O//Rwmx8SrNBBW8IO+EfhyngMp+MWwQs9GxrYItNu1IZKlmf/5UvydXtL6Qb2GjR2f3GdM7AhDnw1CEd/EIMyeGWrz0u0Hh9g+nwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6e06c6072d2018c791313896b55cba96';

$pushID = 'Uaf030c40f55ff201208799e8bbab7062';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







