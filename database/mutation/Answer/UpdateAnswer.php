<?php
    $answer = '';
    $errors = array('answer'=>'');

    if(isset($_POST['submit'])){

        //answer
        if(empty($_POST['answer'])) {
            $errors['answer'] = 'An Answer is required <br />';
        } else {
            $answer = $_POST['answer'];
        }

        if(array_filter($errors)){

        } else {
            $quizquestionID = mysqli_real_escape_string($conn, $quizquestionID);
            $answer = mysqli_real_escape_string($conn, $_POST['answer']);
            
            $sql = "UPDATE quizanswer
            SET quizquestionID='$quizquestionID', answer='$answer'
            WHERE quizanswer.quizAnswerID = $quizanswerID ";

            if(mysqli_query($conn, $sql)){
                // header('Location: index.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>