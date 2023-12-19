<?php

$clientId = 51817587;
$clientSecretKey = "QbiyISQb90Kb3It3iMoT";
$redirectUri = "https://localhost:8000/29/auth.php";
$vkAuthorizeUrl = "http://oauth.vk.com/authorize"; 

$params = [ 'client_id' => $clientId, 'redirect_uri'  => $redirectUri, 'response_type' => 'code'];

echo $link = '<p><a href="' . $vkAuthorizeUrl . '?' . urldecode(http_build_query($params)) . '">Auth with Vk</a></p>';

