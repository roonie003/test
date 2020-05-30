<?php

require_once('../db_config.php');

$query = "DELETE FROM teachers
          WHERE id = 1";

if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Update failed";
}

$db_connection=NULL;