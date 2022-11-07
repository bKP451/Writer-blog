<?php
session_start();
?>

<?php require_once './../db_config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
</head>
<body>
    <?php
    if(isset($_SESSION['admin-name'])){
        echo "<h1>THE ADMIN PAGE</h1>";
        echo "<a href='/../logout-scripts/logout.php'>Logout</a>";
        // loading the articles \
        $read_articles_query = 'SELECT * FROM ARTICLES';
        $read_articles_query_execution = $conn->query($read_articles_query);
        $number_of_articles = $read_articles_query_execution->num_rows;
        if($number_of_articles>0){
            while($article = $read_articles_query_execution->fetch_object()){
                echo "<h1>".$article->post_title."</h1>";
                echo "<p>".((strlen($article->post_body)>100) ? (substr($article->post_body, 0,100).'...'):$article->post_body)."</p>";
                
                echo "<hr>";
            }
        }else {
            echo "NO ARTICLES !! AAKASH - WE KNOW IN OUR HEART YOU ARE A WONDERFUL WRITER !";
        }
    }else {
        echo "SORRY !! IT SEEMS YOU ARE NOT THE ADMIN<br>";
        echo "View Aakash blog at <a href='/../index.php'>high-explorer</a>";
    }


//   First of all I have to fetch the articles from the database in a card
    ?>    


</body>
</html>