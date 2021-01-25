<?php 
    include ("../../../config/db_connect.php");
    //start session
    $studentid = 1;
    $answer = $_POST['answer'];
    //var_dump($answer);
    $quizid = $_POST["quizid"];

    $sql = "SELECT * FROM quizquestion
            WHERE quizID = $quizid";
    $result = $conn->query($sql);

    if($result-> num_rows > 0) {
        $i = 0;
        $mark = 0;
        while ($row = $result-> fetch_assoc()) { 
            if($row['questionType'] == 'text'){
                if($answer[$i] == $row['answer1'] || $answer[$i] == $row['answer2'] || $answer[$i] == $row['asnwer3'])
                {
                    $mark++;
                }
            }

            if($row['questionType'] == "radio"){
                if($answer[$i] == $row['correctAnswer']){
                    $mark++;
                }
            }   
            $i++;
        }
        echo $mark;

        $sqlInsertMark = "INSERT INTO answeredquiz VALUES(NULL, $studentid,'$mark','$quizid')";
        $result = $conn->query($sqlInsertMark);
        echo $last_id = mysqli_insert_id($conn);

        if($result == TRUE)
            header("Location: ../../../student/quiz-result.php?quizid=$quizid&id=$last_id");
        else
            echo 'query error: ' . mysqli_error($conn);

    }
?>