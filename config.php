<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_NAME', 'gayle');
define('DB_USER_TBL', 'login_info');

// Google API configuration
define('GOOGLE_CLIENT_ID', '469129339782-8i7n7q8l39t5kfghg764j122klgi9pjf.apps.googleusercontent.com"');
define('GOOGLE_CLIENT_SECRET', 'yZBt1V20UkfQGpkUTn-DU55v');
define('GOOGLE_REDIRECT_URL', 'https://math.seattleacademy.org/aldencutler/2113-5/index.php');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('SAAS Graduation Planner');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);
$google_oauthV2 = new Google_Oauth2Service($gClient);