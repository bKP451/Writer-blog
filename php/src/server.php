<?php
session_start();
require_once 'db_config.php';

// initialize $update to false at the beginning
$update = FALSE;
// code snippet for updating the article
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $specified_article_exec = $conn->query("SELECT * FROM ARTICLES where post_id=$id");

if($specified_article_exec == TRUE){
    $old_article = $specified_article_exec->fetch_array(MYSQLI_ASSOC);
    $article_heading = $old_article["post_title"];
    $article_body = $old_article["post_body"];
}


}



// code snippet for deleting of the article

if(isset($_GET['del'])){
    if(isset($_SESSION['admin-name'])){
        // now delete operation will be here 
        $post_id = $_GET['del'];
        $delete_query_execution_result = $conn->query("DELETE FROM ARTICLES WHERE post_id=$post_id");
        if ($delete_query_execution_result){
            header('location:index.php');
        } else {
            echo "Could not delete successfully !!";
        }
        
    } else {
        echo "You can view Aakash Dawadi's blog at"."<a href='index.php'>AAKASH BLOG </a>";
    }
}

// let me fetch the data from the database

// echo ($conn->query("SELECT * FROM ARTICLES"))->num_row
if(isset($_POST['upload'])){
    $post_title = $_POST['post_title'];
    $post_body = $_POST['post_body'];   

    $create_article_query = "INSERT INTO ARTICLES (post_title, post_body) VALUES ('$post_title', '$post_body')";
    $h = $conn->query($create_article_query);
    
    if ($h) {
        header('location:index.php');
        // echo "successfully saved !!";
    } else {
        echo "unsuccessful insert operation !!";
        echo $post_title." ".gettype($post_title);
        echo $post_body;
    }
    
}

if(isset($_POST['update'])){
    // echo "I am the update operation !!!";
    // I have to get the id of the post that is to be updated

    $post_title = $_POST['post_title'];
    $post_body = $_POST['post_body'];   
    $post_id = $_POST['post_id'];

     $update_query = "UPDATE ARTICLES set post_title = '$post_title', post_body = '$post_body' where post_id='$post_id'";

     $update_query_execution = $conn->query($update_query);
     
     if ($update_query_execution) {
        header('location:index.php');
     } else {
        echo "unsuccessful update query execution !!";
     }

}


?>