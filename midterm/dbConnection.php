<?php
//Anthony Zerka
//CST 336
//midterm

function getDatabaseConnection($dbname = 'cinder'){  //if there is nothing sent as a parameter then ""ottermart" will be default db
    $host = 'localhost'; // CLoud9
    $username = 'root';
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