<?php
/**
 * Created by PhpStorm.
 * User: Tanja
 * Date: 05/05/2017
 * Time: 16.34
 */
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $title = $_GET['title'];
    $image= $_GET['image'];
    $paragraph = $_GET['paragraph'];

    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">
    <h2>Update News</h2>
    <a href="ChangeNews.html">
        <button class="btn btn-success">Go to Change News</button>
    </a>
    <br>
    <br>
    <form action="Php/Update.php" method="post" enctype="multipart/form-data">

        <div>
            <input id="title" type="text" name="title" value="'.$title.'">
        </div>
        <br>
        <div>
            <textarea id="paragraph" type="text" name="paragraph">'.$paragraph.'</textarea>
        </div>
        <div>
            <textarea id="image" type="text" name="image">'.$image.'</textarea>
        </div>
        <div>
            <input id="" type="hidden" name="id" value="'.$id.'">
            <input type="submit" value="Update" name="submit">
        </div>
    </form>
</div>
</body>
</html>';
} else{
    echo "No id";
}

