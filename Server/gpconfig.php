<?php
session_start();
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

$client_id ='521975842406-qch2holracminqo53d5gu1ustp07bj39.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'https://sociallogin.jarvis-solusi.id:44337/google.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setClientId($client_id); 
$gclient->setClientSecret($client_secret); 
$gclient->setRedirectUri($redirect_url); 

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>
