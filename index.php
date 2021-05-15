<?php


$parameters = array(
    'chat_id' => '-576235570',
    'text' => getDogePrice(),
);
// if (getDogePrice() >= 14.2) {
    send("sendMessage", $parameters);
// }

function send($method, $parameters)
{
    $url = "https://api.telegram.org/bot1895733767:AAFVP2uQ5i5tZVwekH5LZVpDq4q2yO-Pd6U/$method";
    if (!$curl  = curl_init()) {
        exit();
    }

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curl);
    return $output;
}



function getDogePrice()
{
    $url = "https://api.wazirx.com/api/v2/market-status";
    $json = file_get_contents($url);
    $obj = json_decode($json);
    $marketdata = $obj->markets;
    return number_format((float)$marketdata[87]->last, 3, '.', '');
}


?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./custom.js"></script>
</head>
<body>
    My Notifier 
    </body>
</html>
