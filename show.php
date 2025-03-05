<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <style>
        ul{
            text-align: left;
            color: red;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <?php
    //connection
    try {
        $pdo = new pdo("mysql:host=localhost;dbname=BlogDB", "root", "");
        //query
        $id = $_GET['id'];
        $data = $pdo->query("select * from posts where id='$id'");
        $row = $data->fetch(pdo::FETCH_ASSOC);
    ?>
        <ul>
            <li><?php echo $row['title']  ?></li>
            <li><?php echo $row['content']  ?></li>
            <li><?php echo $row['created_at']  ?></li>
           
        </ul>
    <?php
    } catch (PDOException $e) {
        echo $e;
    }

    //close
    $pdo = null;
    ?>
</body>

</html>