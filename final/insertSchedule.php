<?php

include "./dbConnection.php";
$conn = getDatabaseConnection("final");

$insert = $_POST['insertInto'];
session_start();
$usr = $_SESSION['user_id'];
$date = $_POST['date'];
$start = $_POST['startTime'];
$duration = $_POST['duration'];

$sql = "INSERT INTO schedule (user_id, date, start, duration, booked_by)
VALUES (:usr, :date , :s, :d, 'Not Booked')";



$namedParameters = array();


$namedParameters[':usr'] = $usr;
$namedParameters[':date'] = $date;
$namedParameters[':s'] = $start;
$namedParameters[':d'] = $duration;
// //If something is specifically searched for
// if(!empty($_GET['product'])){
//     $sql .= " AND productName LIKE :productName" ;//OR productDescription LIKE :productDescription";
//     $namedParameters[":productName"] = "%" . $_GET['product'] . "%";
//     // $namedParameters[":productDescription"] = "%" . $_GET['product'] . "%";
// }
//     // $sql .= " AND productDescription LIKE :productDescription";
//     // $namedParameters[":productDescription"] = "%" . $_GET['product'] . "%";

// if(!empty($_GET['category'])){
//     $sql .= " AND catId = :categoryId";
//     $namedParameters['categoryId'] = $_GET['category'];
// }

// if(!empty($_GET['priceFrom'])){
//     $sql .= " AND price >= :priceFrom";
//     $namedParameters[':priceFrom'] = $_GET['priceFrom'];
// }

// if(!empty($_GET['priceTo'])){
//     $sql .= " AND price <= :priceTo";
//     $namedParameters[':priceTo'] = $_GET['priceTo'];
// }

// if(isset($_GET['orderBy'])){
//     if($_GET['orderBy'] == "price"){
//         $sql .= " ORDER BY price";
//     }
//     else if($_GET['orderBy'] == "name"){
//          $sql .= " ORDER BY productName";
//     }
// }

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);   //if searching for something, we need to include namedParameters
// $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);

?>