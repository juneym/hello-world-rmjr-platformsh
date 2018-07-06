<?php

require_once __DIR__ . "/../vendor/autoload.php";

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

$app->get("/", function($request, $response, $args) {
    return $response->write("
    Welcome! This is a test app for evaluating Platform.sh
    
    Hit the URL path: \"/hello/Jack\" and see what happens. 
    ");
});

// Run app
$app->run();