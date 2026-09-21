<?php

use Dom\Sqlite;

$host ='localhost';
$username = 'root';
$password = "";
$db_name = "login_system";


$conn = new Sqlite($host,$username,$password,$db_name);
?>