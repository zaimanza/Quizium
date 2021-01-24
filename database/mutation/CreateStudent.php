<?php

    $studentName = $matrixNum = $password = '';
    $errors = array('studentName'=>'','matrixNum'=>'','password'=>'');

    if(isset($_POST['submit'])){

        //studentName
        if(empty($_POST['studentName'])){
            $errors['studentName'] = 'A studentName is required <br />';
        } else {
            $studentName = $_POST['nastudentNameme'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $studentName)){
                $errors['studentName'] = 'Student Name must be letters and spaces only';
            }
        }
        //matrixNum
        if(empty($_POST['matrixNum'])){
            $errors['matrixNum'] = 'Matrix Number is required <br />';
        } else {
            $matrixNum = $_POST['matrixNum'];
            if(!preg_match('/^[0-9]*$/', $matrixNum)){
                $errors['matrixNum'] = 'Matrix Number must be numbers only';
            }
        }
        //password
        if(empty($_POST['password'])){
            $errors['password'] = 'A password is required <br />';
        } else {
            $password = $_POST['password'];
        }


        if(array_filter($errors)){

        } else {
            $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
            $matrixNum = mysqli_real_escape_string($conn, $_POST['matrixNum']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql = "SELECT student.* FROM student
            WHERE matrixNum = $matrix
            AND password = $password";

            if(mysqli_query($conn, $sql)){
                $result = mysqli_query($conn, $sql);
                $studentResult = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if($studentResult == null){

                    $sql = "INSERT INTO student(studentName,password,matrixNum) VALUES ('$studentName', '$password','$matrixNum')";

                    if(mysqli_query($conn, $sql)){
                        header('Location: index.php');
                    } else {
                        echo 'query error: ' . mysqli_error($conn);
                    }
                } else {
                    echo 'Student already exist.';
                }

                //free result
                mysqli_free_result($result);
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>