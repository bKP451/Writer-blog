<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'mysql_db';

// Database use name
$user = 'aakash_explorer';

//database user password
$pass = 'aakash_explorer';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass,"BLOG");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>