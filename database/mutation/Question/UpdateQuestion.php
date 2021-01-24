<?php
    $questionName = $correctAnswer = '';
    $errors = array('questionName'=>'','correctAnswer'=>'');

    if(isset($_POST['submit'])){

        //questionName
        if(empty($_POST['questionName'])){
            $errors['questionName'] = 'An Question Name is required <br />';
        } else {
            $questionName = $_POST['questionName'];
        }

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

            $sql = "UPDATE quizquestion
            SET questionName='$questionName', questionName='$questionName', quizID='$quizID'
            WHERE quizquestion.quizQuestionID = $quizanswerID ";            

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