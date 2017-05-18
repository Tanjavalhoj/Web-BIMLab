<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 15.05
 */

include("DBConnection.php");
#include("upload.php");

$id = $_POST['id'];
$title = $_POST['title'];
$paragraph = $_POST['content'];
$image = $_POST['image'];



$stmt = $conn->prepare("UPDATE articles SET title = ?, paragraph = ?, image = ? WHERE id = ?");
$stmt->bind_param("sssi", $title, $paragraph, $image, $id);

if ($stmt->execute() === FALSE) {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

header('Location: ../ChangeNews.html');

?>