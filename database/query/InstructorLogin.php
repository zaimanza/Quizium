<?php
    $username = $password = '';
    $errors = array('username'=>'','password'=>'');

    if(isset($_POST['submit'])){
        //username
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

        if(array_filter($errors)){

        } else {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql = "SELECT instructor.* FROM instructor
            WHERE username = $username
            AND password = $password";

            if(mysqli_query($conn, $sql)){
                $result = mysqli_query($conn, $sql);
                $instructorResult = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if($instructorResult != null){
                    header('Location: index.php');
                } else {
                    echo 'Incorrect Username or Password';
                }

                //free result
                mysqli_free_result($result);
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    }
?>