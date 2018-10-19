<?php
require_once('googleapi/vendor/autoload.php');
session_start();
$client = new Google_Client();
$client->setAuthConfig('clientcred.json');
$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
$client->setRedirectUri('http://localhost/google/callback.php');
$client->setAccessType('offline');        // offline access
$client->setIncludeGrantedScopes(true); 
?>