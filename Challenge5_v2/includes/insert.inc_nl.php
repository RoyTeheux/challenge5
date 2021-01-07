<?php
print_r($_FILES);
include_once('../includes/uploadimage.inc.php');

$sql = "INSERT INTO tb_menu_items (title, catagory, picture, price, description) 
VALUES ('$title','$catagory', '$name', '$price', '$description')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //print_r($result);
