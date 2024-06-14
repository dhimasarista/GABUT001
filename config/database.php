<?php

$host = "localhost";
$db = "mahasiswa";
$user = "dhim_dev";
$password = "dhimdhim22";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
} catch (PDOException $e) {
    die("Connection failed " . $e->getMessage());
}
