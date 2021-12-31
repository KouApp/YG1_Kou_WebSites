<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.binance.com/api/v3/ticker/price',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$users = json_decode($response);
?>

<html>
<table>
    <tbody>
        <tr>
            <th>Name</th>
            <th>Occupation</th>
            <th>Country</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user->symbol; ?> </td>
            <td> <?= $user->price; ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</html>
