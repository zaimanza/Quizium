<?php
    session_start();

    if(isset($_POST['submit'])){

        if(array_filter($errors)){

        } else {

            $sql = "DELETE FROM quiz
            WHERE quizquestion.quizQuestionID = $quizIquizQuestionIDD";

            if(mysqli_query($conn, $sql)){
                $quizID = mysqli_insert_id($conn);
                echo "New record created successfully. Last inserted ID is: " . $quizID; //TODO: Check balik
                header('Location: index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>