<?php


$access_token = '2vs4xFjqSoDgvxLIYbZHPr/Q6eVt+XQWVvouCemdHHyG3p9gv3y7VYqNwozCSNHCFAjAbR441eNQkGDSTsyqIyq8I8+uwv629L+E/DqE5m9ubTtPyeihPymLhqnke/uycoMcAbSL+OWw7GyoHG1EdgdB04t89/1O/w1cDnyilFU=';

$userId = 'U0ac0653919bc865ed67b55c2ae71cec9';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

