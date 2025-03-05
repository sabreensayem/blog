<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
       
        table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  background-color: #04AA6D;
  color: white;
}
    </style>
    <title >List Posts</title>
</head>

<body>
   
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created_at</th>
                <th>Show</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Add new post</th>
                

            </tr>
        </thead>
        <tbody>
            <?php
            //connection
            try {
                $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
                //query
                $data =  $pdo->query("select * from posts");
                $posts = $data->fetchAll(PDO::FETCH_ASSOC);
            } catch (pdoexception $e) {
                echo $e;
            }
            foreach ($posts as $post) {
            ?>
                <tr>
                    <td><?php echo  $post['id'] ?></td>
                    <td><?php echo  $post['title'] ?></td>
                    <td><?php echo  $post['content'] ?></td>
                    <td><?php echo  $post['created_at'] ?></td>
                   
                    <td><a href="show.php?id=<?php echo  $post['id']?>">Show </a></td>
                     <td>  <a href="delete.php?id=<?php echo  $post['id']?>">Delete </a></td><td>
                        <a href="edit.php?id=<?php echo  $post['id']  ?>">Edit </a>
                    </td>
                    <td><a  href="add_post.php">Add post </a></td>
                </tr>
            <?php
            }
            //close
            $pdo = null;

            ?>

        </tbody>
    </table>
   

</body>

</html>