<?php
//
// Main Page for redirection routes
//

$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = strtok($requestUri, '?');

// Home
if ($requestUri === '/') {
	exit();
}

// Redirect to 404 page if no matching route found
header("HTTP/1.0 404 Not Found");
include_once 'templates/404.php';
exit();
