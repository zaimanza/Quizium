<?php
    //DATABASE
    include ("../config/db_connect.php");
    
    session_start();
    $name = $username = $password = '';
    $errors = array();
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizium";

    $db = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
    
    //register
    if(isset($_POST['Register']))
    {
        $name = $_POST['name'];
        $username =  $_POST['username'];
        $password =  $_POST['password'];

        if (count($errors)==0) {
            
            $sql = "INSERT INTO instructor(name,username,password) VALUES ('$name','$username','$password')";
            mysqli_query($db,$sql);
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['instructorID'] = $instructorID;
         
            header('location: ./TutorLogin.php');
        }
    }

    //login
    if(isset($_POST['Login'])){
        //matrix
        if(empty($_POST['username'])){
            $errors['username'] = 'Username is required <br />';
        } else {
            $username = $_POST['username']; 
        }

        //password
        if(empty($_POST['password'])){
            $errors['password'] = 'A Password is required <br />';
        } else {
            $password = $_POST['password'];
        }

        if(count($errors)==0){

            $query = "SELECT * FROM instructor
            WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db,$query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $name;
               
                while ($row = $result-> fetch_assoc()) 
                { 
                    $_SESSION['instructorID'] = $row['instructorID'];
                }
                header('location: ../instructor/index.php');  //CHANGE PAGE DIRECTORY
            }
            else {
                array_push($errors, "The username/password is incorrect");
            }
        }
    }
?>