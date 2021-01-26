<?php
$id = $_SESSION["instructorID"];
$query = "SELECT * FROM quiz
WHERE InstructorID = $id ";
$result1 = $conn->query($query);
?>