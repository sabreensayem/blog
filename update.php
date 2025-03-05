<?php

try {
    //connection
    $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
    //query

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
   
    
    

    $data = $pdo->prepare("UPDATE posts
     SET title =?, content =?
     WHERE id= ?");
    $data->execute([$title, $content, $id]);

    header("Location:posts.php");

} catch (PDOException $e) {
    echo $e;
}

$pdo = null;