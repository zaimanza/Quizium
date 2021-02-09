<?php
    
    session_start();
    $name = $username = $password = '';
    $errors = array();
    
    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "quizium";

    // $db = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
    
    //register
    if(isset($_POST['Register']))
    {
        $name = $_POST['name'];
        $username =  $_POST['username'];
        $password =  $_POST['password'];

        $select = "SELECT * FROM instructor WHERE username = '$username'";
            $result = $conn->query($select);
            $user = mysqli_fetch_assoc($result);

            if ($user) { //if user exist
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Account with this username and password has already been registered! Login to your account')
                window.location.href='./TutorLogin.php'
                </SCRIPT>");
            }
            else {
                $sql = "INSERT INTO instructor(name,username,ipassword, imgName, imgDir) VALUES ('$name','$username','$password', '', '')";
                mysqli_query($conn,$sql);

                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['instructorName'] = $name;
                //$_SESSION['studentID'] = $studentID;
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('Instructor account created successfully!')
                                    window.location.href='./TutorLogin.php'
                                     </SCRIPT>");
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
            WHERE username = '$username' AND ipassword = '$password'";
            $result = mysqli_query($conn,$query);

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