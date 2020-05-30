<?php

require_once('../db_config.php');

$query = "INSERT INTO teachers (id, firstName, surname, dob, email, startDate)
          VALUES (NULL, 'Aaron', 'Penn', '2017-02-23', 'aaron@myschool.com','2020-08-01')";
if($db_connection->exec($query)){
    echo " success";
}else{
    echo " Failed";
}
;

        
$db_connection = NULL;