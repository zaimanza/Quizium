<?php
    // connect to database
    // $conn = mysqli_connect('localhost','root','','quizium');
    $conn = mysqli_connect('us-cdbr-east-03.cleardb.com','b5a0276ecf621d','0ea21082','heroku_35126f89ed829de');
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    } 
?>