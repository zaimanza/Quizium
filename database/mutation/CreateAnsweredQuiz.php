<?php
    session_start();
    $quizName = $openDate = $closeDate = $grade = '';
    $errors = array('quizName'=>'','openDate'=>'','closeDate'=>'','grade'=>'');

    if(isset($_POST['submit'])){
        //studentID
        $studentID = $_SESSION['studentID'];

        //instructorID
        $instructorID = $_POST['instructorID'];

        //quizName
        if(empty($_POST['quizName'])){
            $errors['quizName'] = 'An Quiz Name is required <br />';
        } else {
            $quizName = $_POST['quizName'];
        }

        //open date
        if(empty($_POST['openDate'])){
            $errors['openDate'] = 'An Open Date is required <br />';
        } else {
            $openDate = date('Y-m-d', strtotime($_POST['openDate']));
        }

        //close date
        if(empty($_POST['closeDate'])){
            $errors['closeDate'] = 'An Close Date is required <br />';
        } else {
            $closeDate = date('Y-m-d', strtotime($_POST['closeDate']));
        }

        //grade
        if(empty($_POST['grade'])){
            $errors['grade'] = 'An Quiz Status is required <br />';
        } else {
            $grade = $_POST['grade'];
        }

        if(array_filter($errors)){

        } else {
            $studentID = mysqli_real_escape_string($conn, $_SESSION['studentID']);
            $instructorID = mysqli_real_escape_string($conn, $_POST['instructorID']);
            $quizName = mysqli_real_escape_string($conn, $_POST['quizName']);
            $openDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['openDate']))));
            $closeDate = mysqli_real_escape_string($conn, date('Y-m-d', strtotime(str_replace('-','/',$_POST['closeDate']))));
            $grade = mysqli_real_escape_string($conn, $_POST['grade']);

            $sql = "INSERT INTO answeredquiz(studentID,instructorID,quizName,openDate,closeDate,grade)
            VALUES ('$studentID', '$instructorID', '$quizName', '$openDate', '$closeDate', '$grade')";

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