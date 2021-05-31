<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = '192.168.2.77';
    $dbname = 'tutiplast';
    $user = 'root';
    $pass = 'root';
    $port = '3308';
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
