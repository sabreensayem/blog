<?php
 
 session_start();
 if (isset($_session['role'])&&$_session['role']==='admin'){
}else{
    echo"sorry,you do not have permission to delete the data";
}

//connection

try {
    $id = $_GET['id'];
    $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
    //query
    $pdo->query("delete from posts where id='$id'");
    header("Location:posts.php");
} catch (PDOException $e) {
    echo $e;
}

//close
$pdo = null;