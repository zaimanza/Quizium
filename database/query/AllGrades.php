<?php
    
    if(isset($_GET['studId'])){
        $id = mysqli_real_escape_string($conn, $_GET['studId']);

        //query for one student
        $sql = "SELECT answeredquiz.*, instructor.*, student.* FROM answeredquiz
        INNER JOIN instructor ON instructor.instructorID = answeredquiz.InstructorID
        INNER JOIN student ON student.studentID = answeredquiz.StudentID";

        //make query & get result
        $result = mysqli_query($conn, $sql);

        // fetch resulting in an array
        $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result
        mysqli_free_result($result);

        //close connection
        mysqli_close($conn);
    }
?>