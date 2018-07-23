<?php



require "vendor/autoload.php";

$access_token = '2vs4xFjqSoDgvxLIYbZHPr/Q6eVt+XQWVvouCemdHHyG3p9gv3y7VYqNwozCSNHCFAjAbR441eNQkGDSTsyqIyq8I8+uwv629L+E/DqE5m9ubTtPyeihPymLhqnke/uycoMcAbSL+OWw7GyoHG1EdgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '103ef54cdbd81b11715fa395d2032f36';

$pushID = 'thering999';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







