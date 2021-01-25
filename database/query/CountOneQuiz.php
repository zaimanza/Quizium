<?php 
    session_start();
    $id = $_SESSION["studentID"];
    $sql = "SELECT COUNT(*) c
            FROM answeredquiz
            WHERE StudentID = $id";
          //WHERE instructorID = $d
    $result = $conn->query($sql);

    if($result-> num_rows>0) {
        while ($row = $result-> fetch_assoc()) {
          echo $row["c"];
        }
    }
?>