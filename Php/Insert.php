<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 15.02
 */
include("DBConnection.php");

$title = $_POST['title'];
$image = $_POST['image'];
$paragraph = $_POST['paragraph'];

$stmt = $conn->prepare("INSERT INTO news (title, image, paragraph) VALUES (?,?,?)");
$stmt->bind_param("sss", $title, $image, $paragraph);

if ($stmt->execute() === TRUE) {
   header('Location: ../ChangeNews.html');
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>