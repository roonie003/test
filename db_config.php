<?php
 
$db_host = 'localhost';
$db_name = 'myschool';
$db_username = 'roonie';
$db_password = 'kjY1p9wpkbhoqzOs';
 
$dsn = "mysql:host=$db_host; dbname=$db_name";
 
try{
$db_connection = new PDO($dsn, $db_username, $db_password);
 
} catch (Exception $e ){
    echo " There was a failure - " . $e->getMessage();
}