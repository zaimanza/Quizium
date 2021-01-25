<?php 
$id = $_SESSION["instructorID"];
$sql = "SELECT COUNT(*) c
        FROM quiz
        WHERE InstructorID = $id";
      //WHERE instructorID = $d
$result = $conn->query($sql);

if($result-> num_rows>0) {

    while ($row = $result-> fetch_assoc()) {
      echo $row["c"];
    }
  }
?>