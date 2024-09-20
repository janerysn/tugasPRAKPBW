<?php

function getConnection(): PDO
{
    $host = 'localhost';
    $dbname = 'test';
    $username = 'root';
    $password = '';

    return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
}