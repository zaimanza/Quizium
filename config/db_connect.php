<?php
    // connect to database
    $conn = mysqli_connect('localhost','root','','quizium');

    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    } 
?>