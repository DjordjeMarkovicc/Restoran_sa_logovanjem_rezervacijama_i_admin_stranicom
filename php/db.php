<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=restourant", $username, $password);
 
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
// $stmt = $conn->query('SELECT category, price, product_name FROM tbl_products');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'restourant');

/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . $conn->connect_error);
}