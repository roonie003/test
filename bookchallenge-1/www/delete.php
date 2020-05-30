<?php

require_once('../db_config.php');

$query = "DELETE FROM library
          WHERE id = 8";

if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Update failed";
}

$db_connection=NULL;