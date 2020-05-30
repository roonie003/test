<?php

require_once('../db_config.php');

$query = "INSERT INTO library (id, title, author, genre, height, publisher)
          VALUES (NULL, 'Harry Porter: Afterlife', 'Roonie', 'horror', '397', 'penguin')";

if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Failed";
}
        
$db_connection = NULL;