<?php
        $id = $_SESSION["studentID"];
        $quiz = "SELECT * FROM answeredquiz aq
        JOIN quiz q ON q.quizID = aq.quizID 
        WHERE StudentID = $id";

        //make query & get result
        $result = mysqli_query($conn, $quiz);
?>