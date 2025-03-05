<?php

try {
    //conncetion
    $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
    echo "Connected";
    var_dump($_POST);

    //query
    $title = $_POST['title'];
    $content = $_POST['content'];
   

    

    $pdo->query("insert into posts (title,content)
    values('$title','$content')");
    header("Location:posts.php");
} catch (pdoexception $e) {
    echo $e;
}

//close
$pdo = null;