<?php
require_once 'config.php';
$serverConnection=mysql_connect($dbHost,$dbUser,$dbPass);
if(!$serverConnection){
    die('Database connection error:'.mysql_error());
}
echo ("You are connected to database ...");

mysql_close($serverConnection);
