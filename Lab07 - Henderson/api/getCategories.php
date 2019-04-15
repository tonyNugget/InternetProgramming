<?php
//Anthony Zerka
//CST336
//Lab06

include '../dbConnection.php';

$conn = getDatabaseConnection("ottermart");     //specify which db you're using. in this case, "ottermart"

$sql = "SELECT catId, catName FROM om_category ORDER BY catName";

$stmt = $conn->prepare($sql);   //This sends the sql
$stmt->execute();   //This executes sql statment
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);   //This stores the results of sql into this variable 

echo json_encode($records);


?>