<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit post</title>
    <style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
 
}
</style>
</head>

<body>
    <?php
   
    try {
        //conncetion
        $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
        //query
        $id = $_GET['id'];
        $data = $pdo->query("select * from posts where id='$id'");
        $row = $data->fetch(pdo::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e;
    }

    //close
    $pdo = null;
    ?>
    <?php
     session_start();
     if (isset($_session['role'])&&$_session['role']==='admin'){
        ?>
    <form action="update.php" method="POST">
   
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <label for="title">Title</label><br>
        <input type="text" name="title" value="<?php echo $row['title']?>" placeholder="enter your title"><br>
        <label for="content">Content</label><br>
        <input type="text" name="content" value="<?php echo $row['content']?>" placeholder="enter your content"><br>
        
        <input type="submit" value="Update">
    </form>
    <?php
}else{
    echo"sorry,you do not have permission to edit the data";
}
?>
</body>

</html>