<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'db_barang';

$conn = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_error())
{
    echo "Failde to connect to MySQL:".mysqli_connect_error();
}