<?php
require_once 'db_config.php';

// initialize post variables

$post_title = '';
$post_body = '';


// let me fetch the data from the database

// echo ($conn->query("SELECT * FROM ARTICLES"))->num_row
if(isset($_POST['upload'])){
    $post_title = $_POST['post_title'];
    $post_body = $_POST['post_body'];

    $sample_query = "INSERT INTO ARTICLES (post_title, post_body) VALUES ('$post_title', '$post_body')";
    $h = $conn->query($sample_query);
    
    if ($h) {
        header('location:index.php');
        // echo "successfully saved !!";
    } else {
        echo "unsuccessful insert operation !!";
        echo $post_title." ".gettype($post_title);
        echo $post_body;
    }
    
}