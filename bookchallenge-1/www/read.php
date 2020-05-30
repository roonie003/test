<?php

require_once('../db_config.php');

//* fields

$query = " SELECT * FROM library";


if($results = $db_connection->query($query)){
   foreach($results as $result) {
     echo $result ['title'] ;
     echo "<br>";
}
}else{
    echo " No record found";
}

$db_connection = NULL;