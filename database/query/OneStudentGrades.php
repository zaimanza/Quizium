<?php

    if(isset($_GET['id'])){

        session_start();
        $id = $_SESSION["studentID"];
        $answeredquizid = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM answeredquiz aq 
        JOIN answeredquizquestion aqq ON aq.answeredquizID = aqq.answeredquizID = $answeredquizid
        WHERE studentID = $id
        ";

        //make query & get result
        $result = mysqli_query($conn, $sql);
    }
?>