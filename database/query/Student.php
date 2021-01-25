<?php
    //DATABASE
    //include ("../../config/db_connect.php");
    
    session_start();
    $matrix = $password = $studentName = '';
    $errors = array();
    
    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "quizium";

    // $db = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
    
    //register
    if(isset($_POST['Register']))
    {
        $matrix = $_POST['matrix'];
        $password =  $_POST['spassword'];
        $studentName =  $_POST['studentName'];

        if (count($errors)==0) {
            
            $sql = "INSERT INTO student(matrixNum,studentName,spassword) VALUES ('$matrix','$studentName','$password')";
            mysqli_query($conn,$sql);
            $_SESSION['matrix'] = $matrix;
            $_SESSION['password'] = $password;
            $_SESSION['studentName'] = $studentName;
            $_SESSION['studentID'] = $studentID;
            header('location: ./StudentLogin.php');
        }
    }

    //login
    if(isset($_POST['Login'])){
        //matrix
        if(empty($_POST['matrix'])){
            $errors['matrix'] = 'Matrix Number is required <br />';
        } else {
            $matrix = $_POST['matrix']; 
            if(!preg_match('/^[0-9]*$/', $matrix)){
                $errors['matrix'] = 'Matrix Number must be numbers only';
            }
        }

        //password
        if(empty($_POST['password'])){
            $errors['password'] = 'A Password is required <br />';
        } else {
            $password = $_POST['password'];
        }

        if(count($errors)==0){

            $query = "SELECT * FROM student
            WHERE matrixNum = '$matrix' AND spassword = '$password'";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['matrix'] = $matrix;
                $_SESSION['password'] = $password;
                $_SESSION['studentName']= $studentName;
                while ($row = $result-> fetch_assoc()) 
                { 
                    $_SESSION['studentID'] = $row['studentID'];
                    //$_SESSION['studentname'] = $row['studentName'];
                }
                header('location: StudentHome.php');
            }
            else {
                array_push($errors, "The matrix number/password is incorrect");
            }
        }
    }
?>