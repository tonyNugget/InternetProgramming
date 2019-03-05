<?php
//Anthony Zerka
//CST 336 - LAB 05
//PHP File

  session_start();
  $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);
  switch($httpMethod) {
    case "OPTIONS":
      // Allows anyone to hit your API, not just this c9 domain
      header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
      header("Access-Control-Allow-Methods: POST, GET");
      header("Access-Control-Max-Age: 3600");
      exit();
    case "GET":
      // Allow any client to access
      header("Access-Control-Allow-Origin: *");
      // Let the client know the format of the data being returned
      header("Content-Type: application/json");
      // TODO: do stuff to get the $results which is an associative array
      $results = array();
      array_push($results, "something");
      // Sending back down as JSON
      echo json_encode($results);
      break;
    case 'POST':
      // Get the body json that was sent
      $rawJsonString = file_get_contents("php://input");
      //var_dump($rawJsonString);
      // Make it a associative array (true, second param)
      $jsonData = json_decode($rawJsonString, true);
      // TODO: do stuff to get the $results which is an associative array
      //LIST OF USERNAME THAT ARE ALREADY TAKEN:
      $results = array("admin","bob","dude","zerka","cst336","maam");
      // Allow any client to access
      header("Access-Control-Allow-Origin: *");
      // Let the client know the format of the data being returned
      header("Content-Type: application/json");
      //CHECK TO SEE IF USERNAME IS IN PASSWORD, IF IT IS, PASS ERROR TO ARRAY
      if(strpos($_POST['pw'], $_POST['usr']) !== false){
        array_push($results,"pwError");
      }else{
        //IF USERNAME IS NOT IN PASSWORD, THEN REMOVE ERROR
        unset($results["pwError"]);
      }
      //CREATE ARRAY TO HOLD RANDOM PASS
      $pass = array(); 
      //CREATE RANDOM LENGTH FOR PASSWORD TO BE
      $pwLength = rand(20, 30);
      //ARRAY "ALPHABET" HOLDS ALL POSSIBLE CHARACTERS TO BE USED IN RANDOM PASSOWRD
      $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      //GET LENGTH OF "ALPHABET" ARRAY
      $alphaLength = strlen($alphabet) - 1;
      //FOR LOOP TO POPULATE "PASS" ARRAY WITH RANDOM CHARACTERS
      for ($i = 0; $i < $pwLength; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
      }
      //PUSH RANDOM PASSWORD TO ARRAY
      array_push($results, implode($pass));
      //echo implode($pass);
       echo json_encode($results);
      break;
    case 'PUT':
      // TODO: Access-Control-Allow-Origin
      http_response_code(401);
      echo "Not Supported";
      break;
    case 'DELETE':
      // TODO: Access-Control-Allow-Origin
      http_response_code(401);
      break;
  }
?>