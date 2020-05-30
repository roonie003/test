<?php

require_once('../db_config.php');

$query = " UPDATE teachers
            SET firstName = 'Peter', surname = 'Green'
            WHERE id = 76 ";
if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Update failed";
}

$db_connection=NULL;