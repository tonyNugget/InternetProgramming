<?php
//Anthony Zerka
//CST 336
//Lab06

function getDatabaseConnection($dbname = 'user'){  //if there is nothing sent as a parameter then ""ottermart" will be default db
    $host = '127.0.0.1'; // CLoud9
    $username = 'zerka';
    $password = '';
    
    
    
    
     //when connecting from Heroku

    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {

        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $host = $url["host"];

        $dbname = substr($url["path"], 1);

        $username = $url["user"];

        $password = $url["pass"];

    } 
    
    
    
    //create db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //display errors when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
}

?>