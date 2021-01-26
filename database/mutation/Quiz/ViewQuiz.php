<?php
$id = $_SESSION["instructorID"];
$query = "SELECT * FROM quiz 
WHERE InstructorID = $id 
ORDER BY quizID desc";
$result1 = $conn->query($query);
?>