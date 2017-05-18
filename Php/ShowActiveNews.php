<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 15.21
 */

include ("DBConnection.php");
session_start();

$sql = "SELECT * FROM news WHERE is_active=1";

$result = $conn->query($sql);
$rows = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

$conn->close();

?>