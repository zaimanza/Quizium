<?php
    $questionName = $correctAnswer = '';
    $errors = array('questionName'=>'','correctAnswer'=>'');

        //questionName
        if(empty($_POST['questName'])){
            $errors['questName'] = 'A Question Name is required <br />';
        } else {
            $questionName = $_POST['questName'];
        }

        //accept both types of questions, if else
        //correctAnswer
        if(empty($_POST['correctAnswer'])) {
            $errors['correctAnswer'] = 'An Correct Answer is required <br />';
        } else {
            $correctAnswer = $_POST['correctAnswer'];
        }

        if(array_filter($errors)){

        } else {
            $quizID = mysqli_real_escape_string($conn, $quizID);
            $questionName = mysqli_real_escape_string($conn, $_SESSION['questionName']);
            $correctAnswer = mysqli_real_escape_string($conn, $_POST['correctAnswer']);
            

            $sql = "INSERT INTO quizquestion(correctAnswer,questionName,quizID)
            VALUES ('$correctAnswer', '$questionName','$quizID')";

            if(mysqli_query($conn, $sql)){
                $quizquestionID = mysqli_insert_id($conn);
                echo "New record created successfully. Last inserted ID is: " . $quizquestionID; //TODO: Check balik
                // header('Location: index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }

?>