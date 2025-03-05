<?php

//connection
try {
    $id = $_GET['id'];
    $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
session_start();
 if (isset($_session['role'])&&$_session['role']==='admin'){
    //query
    $pdo->query("delete from posts where id='$id'");

    header("Location:posts.php");
  }else{
    echo"sorry,you do not have permission to delete the data";
}

} catch (PDOException $e) {
    echo $e;
}

//close
$pdo = null;
