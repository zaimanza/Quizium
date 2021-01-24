<?php
$id = $_GET['id'];

$query = "SELECT * FROM quizquestion 
          WHERE quizid = $id";
$result = $conn->query($query);
?>