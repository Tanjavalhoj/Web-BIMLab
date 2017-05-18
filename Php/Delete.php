<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 14.18
 */

include("DBConnection.php");
session_start();

$id = $_POST['id'];

$sql = "UPDATE news SET is_deleted =1 WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute() === FALSE) {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

?>