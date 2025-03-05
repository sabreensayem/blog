<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_post</title>
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
    <form action="add.php" method="POST">
    <label for="title">Title</label><br>
        <input type="text" name="title" placeholder="enter your title"><br>
        <label for="content">Content</label><br>
        <input type="text" name="content" placeholder="enter your content"><br>
       
        <input type="submit" value="Add Post">

    </form>
</body>

</html>