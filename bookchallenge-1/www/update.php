<?php

require_once('../db_config.php');

$query = " UPDATE library
            SET publisher = 'penguin';
            WHERE id = 84 ";

if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Update failed";
}

$db_connection=NULL;