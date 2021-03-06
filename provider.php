<?php
require 'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
use League\OAuth2\Client\Provider\Google;
// Replace these with your token settings
// Create a project at https://console.developers.google.com/
$clientId     = $_ENV['CLIENT_ID'];
$clientSecret = $_ENV['CLIENT_SECRET'];
// Change this if you are not using the built-in PHP server
$redirectUri  = 'http://localhost/google-oauth/index.php';
// Start the session
session_start();
// Initialize the provider
$provider = new Google(compact('clientId', 'clientSecret', 'redirectUri'));
// No HTML for demo, prevents any attempt at XSS
header('Content-Type', 'text/plain');
return $provider;
