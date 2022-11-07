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
    $read_articles_query = 'SELECT * FROM ARTICLES';
    $read_articles_query_execution = $conn->query($read_articles_query);
    $number_of_articles = $read_articles_query_execution->num_rows;
    if($number_of_articles>0){
        while($article = $read_articles_query_execution->fetch_object()){
            echo "<h1>".$article->post_title."</h1>";
            echo "<p>".$article->post_body."</p>";
            echo "<hr>";
        }
    }else {
        echo "NO ARTICLES !! BROTHER AND SISTERS !";
    }
    ?>
    <script>console.log($number_of_articles)</script>
</body>
</html>