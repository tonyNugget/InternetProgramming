<?php




include "./dbConnection.php";
$conn = getDatabaseConnection("pixabay");

$insert = $_POST['url'];

$sql = "INSERT INTO favorites (url)
VALUES (:ins)";



$namedParameters = array();


$namedParameters[':ins'] = $insert;

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);   //if searching for something, we need to include namedParameters
// $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records);

?>