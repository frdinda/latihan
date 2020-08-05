<?php

$server  = 'localhost';
$user    = 'root';
$pass    = '';
$db_name = 'spip';
$port    = '3307';

$conn = new mysqli($server,$user,$pass,$db_name,$port) or die($conn->error);