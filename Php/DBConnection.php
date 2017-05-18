<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 04/05/2017
 * Time: 21.51
 */

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>