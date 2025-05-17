<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "ecomerce";

    try{
        $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name,3306);
        
    }catch(Mysqli_sql_exception $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>