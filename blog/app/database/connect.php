<?php

$conn = new mysqli('localhost', 'root', '', 'blog');


if($conn -> connect_error){
    die('Database connection error ' . $conn->connect_error);
}

?>