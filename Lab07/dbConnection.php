<?php
//Anthony Zerka
//CST 336
//Lab06

function getDatabaseConnection($dbname = 'heroku_cc2133e1153d20a'){  //if there is nothing sent as a parameter then ""ottermart" will be default db
    $host = 'us-cdbr-iron-east-03.cleardb.net'; // CLoud9
    $username = 'b915bb1e039f60';
    $password = '8d949536';
    
    
//     $cfg['Servers'][$i]['host'] = 'us-cdbr-iron-east-03.cleardb.net';
// $cfg['Servers'][$i]['user'] = "b915bb1e039f60";//u
// $cfg['Servers'][$i]['password'] = "8d949536";//p
    
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