<?php
 
$db_host = 'localhost';
$db_name = 'books';
$db_username = 'clientA';
$db_password = 'yWGxohhA502xiSLe';
 
$dsn = "mysql:host=$db_host; dbname=$db_name";
 
try{
$db_connection = new PDO($dsn, $db_username, $db_password);
 
} catch (Exception $e ){
    echo " There was a failure - " . $e->getMessage();
}