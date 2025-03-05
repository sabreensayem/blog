<?php
//connection

try {
    $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");

    echo "Connected Success";
    
       //query
    $pdo->query("insert into posts (title,content)
    values('newpost','post1')");
    
    echo "<br />";
    echo "Excuted";
} catch (PDOException $error) {
    echo $error;
}









//close