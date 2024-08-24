<?php
session_start();
require_once 'config.php';
require_once 'functions.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$request = $_SERVER['REQUEST_URI'];
$base_path = '/nigerian_coffee_express'; // Adjust this if your base path is different

// Remove base path and query string from the request
$request = strtok(str_replace($base_path, '', $request), '?');


switch ($request) {
    case '/':
    case '':
    case '/home':
        require __DIR__ . '/home.php';
        break;
    case '/about':
        require __DIR__ . '/about.php';
        break;
    case '/shop':
        require __DIR__ . '/shop.php';
        break;
    case '/contact':
        require __DIR__ . '/contact.php';
        break;
    case '/login':
        require __DIR__ . '/login.php';
        break;
    case '/register':
        require __DIR__ . '/register.php';
        break;
    case '/logout':
        require __DIR__ . '/logout.php';
        break;
    default:
        echo "Debug: No matching route found. Loading 404 page.<br>";
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}