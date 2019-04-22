<?php

include "./dbConnection.php";
$conn = getDatabaseConnection("pixabay");

$insert = $_POST['url'];
$whereTo = $_POST['search'];

$sql = "UPDATE favorites
SET searchTerm= :wh
WHERE url = :ins";



$namedParameters = array();


$namedParameters[':ins'] = $insert;
$namedParameters[':wh'] = $whereTo;

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);   //if searching for something, we need to include namedParameters
// $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);

?>