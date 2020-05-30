<?php

require_once('../db_config.php');

$query = " SELECT * FROM teachers" ;

$results = $db_connection->query($query) ;

$db_connection = NULL;

foreach($results as $result){
    echo $result ['email'];
    echo "<br>";
}