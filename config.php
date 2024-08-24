<?php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'nigerian_coffee_express');
   define('DB_USER', 'root');
   define('DB_PASS', '');

   $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   // Set error reporting
   error_reporting(E_ALL);
   ini_set('display_errors', 1);

   // Set default timezone
   date_default_timezone_set('Africa/Lagos');