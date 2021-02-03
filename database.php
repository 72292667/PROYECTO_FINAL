<?php

$server = 'sql200.epizy.com';
$username = 'epiz_27599046';
$password = '60ABOlqJDgvT1Bl';
$database = 'epiz_27599046_deliverythomy';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
