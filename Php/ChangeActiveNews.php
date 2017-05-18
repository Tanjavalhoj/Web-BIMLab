<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 15.16
 */

include("DBConnection.php");
session_start();

$id = $_GET['id'];

// Change all articles to not active
$stmt = $conn->prepare("UPDATE news SET is_active = 0");

if ($stmt->execute() === TRUE) {
    console.log("Database Updated");
} else {
    echo "Error: " . $conn->error;
}


// Change selected news to active
$stmt = $conn->prepare("UPDATE news SET is_active=1 WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute() === TRUE) {
    console.log("Database Updated");
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: ../ChangeNews.html');
?>