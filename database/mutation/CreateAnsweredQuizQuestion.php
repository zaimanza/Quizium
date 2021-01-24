<?php
    $quizQuestion = $quizAnswer = $correctAnswer = '';
    $errors = array('quizQuestion'=>'','quizAnswer'=>'','correctAnswer'=>'');

    if(isset($_POST['submit'])){

        //quizQuestion
        if(empty($_POST['quizQuestion'])){
            $errors['quizQuestion'] = 'A Question is required <br />';
        } else {
            $quizQuestion = $_POST['quizQuestion'];
        }

        //quizAnswer
        if(empty($_POST['quizAnswer'])){
            $errors['quizAnswer'] = 'An Answer is required <br />';
        } else {
            $quizAnswer = $_POST['quizAnswer'];
        }

        //correctAnswer
        if(empty($_POST['correctAnswer'])) {
            $errors['correctAnswer'] = 'An Correct Answer is required <br />';
        } else {
            $correctAnswer = $_POST['correctAnswer'];
        }

        //answeredQuizID
        $answeredQuizID = $_POST['answeredQuizID'];

        if(array_filter($errors)){

        } else {
            $quizQuestion = mysqli_real_escape_string($conn, $_POST['quizQuestion']);
            $quizAnswer = mysqli_real_escape_string($conn, $_SESSION['quizAnswer']);
            $correctAnswer = mysqli_real_escape_string($conn, $_POST['correctAnswer']);
            $answeredQuizID = mysqli_real_escape_string($conn, $_POST['answeredQuizID']);

            $sql = "INSERT INTO answeredquizquestion(quizQuestion,quizAnswer,correctAnswer,answeredQuizID)
            VALUES ('$quizQuestion', '$quizAnswer','$correctAnswer','$answeredQuizID')";

            if(mysqli_query($conn, $sql)){
                $quizquestionID = mysqli_insert_id($conn);
                echo "New record created successfully. Last inserted ID is: " . $quizquestionID; //TODO: Check balik
                // header('Location: index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>