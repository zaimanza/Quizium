<?php
include ("../../config/db_connect.php");

    if(isset($_GET['submit'])){
        $code = $_GET['code'];

        $sql = "SELECT * FROM `quiz` WHERE quizCode = '$code'";

        $result = $conn->query($sql);
        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                if($row['quizCode'] == $code)
                {
                    header("Location: ../../student/quiz-description.php?quizCode=$code");
                }
            }
        }
        else{
            header("Location: ../../student/quiz-code.php?validate=false");
        }
            
    $conn->close();
    }
?>