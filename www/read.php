<?php

require_once('../db_config.php');

//* fields

$query = " SELECT * FROM teachers";


if($results = $db_connection->query($query)){
   foreach($results as $result) {
     echo $result ['firstName'] ;
     echo "<br>";
}
}else{
    echo " No record found";
}

$db_connection = NULL;