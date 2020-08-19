<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('894937716165-0qlvi9d8aat9b7v2tcq427ik9vo648pd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('MvIDpXlOgAqCMOU5ZL0_xDIo');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/test/admin/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 