<?php

define('DB_HOST', 'localhost'); //your db host
define('DB_USER', 'devteni'); // your db username
define('DB_PASS', 'devteni123'); // your db password
define('DB_NAME', 'php_dev'); // The name of the database to be connected to this project

// Create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

// WITH PDO

// try {
//     $conn = new PDO("mysql:host=${DB_HOST};dbname=${DB_NAME}", DB_USER, DB_PASS);
//     echo 'Database connected';

// } catch(PDOException $ex) {
//     die('Connection failed' . $ex->getMessage());
// }