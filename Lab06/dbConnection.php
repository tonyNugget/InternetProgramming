<?php
//Anthony Zerka
//CST 336
//Lab06

function getDatabaseConnection($dbname = 'ottermart'){  //if there is nothing sent as a parameter then ""ottermart" will be default db
    $host = 'localhost'; // CLoud9
    $username = 'root';
    $password = '';
    
    //create db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //display errors when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
}

?>