<?php
//connection
$connection = new mysqli("localhost", "root", "");
if ($connection->connect_error) {
    // exit();
    die("connection faild");
}
echo "Connected successfully";

//query
$connection->query("CREATE DATABASE BlogDB");
$connection->query("CREATE TABLE posts
 (id int not null auto_increment primary key,
title varchar(50),
content text(300),created_at timestamp
)");
$connection->query("insert into posts (title,content)
values('new post','hello everyone ')");





//close

$connection->close();
