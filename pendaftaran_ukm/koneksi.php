<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_ukm";

$connect = mysqli_connect($host, $user, $pass, $dbname) or diel('Database Tidak Terhubung');