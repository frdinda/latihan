<?php

$server  = 'localhost';
$user    = 'root';
$pass    = '';
$db_name = 'spip';

$conn = new PDO("mysql:host=$server;port=3307;dbname=$db_name", $user, $pass);