<?php
$dsn = "mysql:host=localhost;dbname=web_lb_3_1";
$user = 'root';
$pass = '';

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo $ex->GetMessage();
}