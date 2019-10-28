@extends('github-client')

<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library

//require_once 'Github_OAuth_Client.blade.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = 'ec7a9985b7647201ec88';
$clientSecret     = 'a0c09fa288b371b7b8b137d9559df95a52b70e2e';
$redirectURL     = 'https://localhost:8000/github-login';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}
?>
