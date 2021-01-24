<?php
$id = $_GET['id'];

$query = "SELECT * FROM quiz 
          WHERE quizid = $id";
$result = $conn->query($query);
?>