<?php require_once 'db_config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAKASH_EXPLORER</title>
</head>
<body>

    <a href="/views/create_page.php"><h1>Add an article !!! </h1></a>
    <?php
    if ($result = $conn->query("SELECT * FROM ARTICLES")) {
        while ($data = $result->fetch_object()) {
            $posts[] = $data;
        }

        foreach ($posts as $post) {
            echo "<h1><u>".$post->post_title."</u></h1>";
            echo "<p>".$post->post_body."</p>";
            echo "<hr>";
        }
    }
    
    
    ?>    
</body>
</html>