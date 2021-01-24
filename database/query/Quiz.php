<?php
    session_start();
    $instructorID = $_SESSION['instructorID'];

    //query for all pizzas
    $sql = "SELECT * FROM quiz 
    WHERE quiz.InstructorID = $instructorID
    ORDER BY quizID";

    //make query & get result
    $result = mysqli_query($conn, $sql);

    // fetch resulting in an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    
?>