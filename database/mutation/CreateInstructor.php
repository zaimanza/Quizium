<?php

    $name = $username = $password = '';
    $errors = array('name'=>'','username'=>'','password'=>'');

    if(isset($_POST['submit'])){

        //name
        if(empty($_POST['name'])){
            $errors['name'] = 'A name is required <br />';
        } else {
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                $errors['name'] = 'Name must be letters and spaces only';
            }
        }
        //username
        if(empty($_POST['username'])){
            $errors['username'] = 'A username is required <br />';
        } else {
            $username = $_POST['username'];
        }
        //password
        if(empty($_POST['password'])){
            $errors['password'] = 'A password is required <br />';
        } else {
            $password = $_POST['password'];
        }


        if(array_filter($errors)){

        } else {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql = "SELECT instructor.* FROM instructor
            WHERE username = $username
            AND password = $password";

            if(mysqli_query($conn, $sql)){
                $result = mysqli_query($conn, $sql);
                $instructorResult = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if($instructorResult == null){

                    $sql = "INSERT INTO instructor(name,username,password) VALUES ('$name', '$username','$password')";

                    if(mysqli_query($conn, $sql)){
                        header('Location: index.php');
                    } else {
                        echo 'query error: ' . mysqli_error($conn);
                    }
                } else {
                    echo 'Instructor already exist.';
                }

                //free result
                mysqli_free_result($result);
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    } // End of POST check

?>