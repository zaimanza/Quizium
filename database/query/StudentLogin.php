<?php
    $matrix = $password = '';
    $errors = array('matrix'=>'','password'=>'');

    if(isset($_POST['submit'])){
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

        if(array_filter($errors)){

        } else {
            $matrix = mysqli_real_escape_string($conn, $_POST['matrix']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $sql = "SELECT student.* FROM student
            WHERE matrixNum = $matrix
            AND password = $password";

            if(mysqli_query($conn, $sql)){
                $result = mysqli_query($conn, $sql);
                $userResult = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if($userResult != null){
                    header('Location: index.php');
                } else {
                    echo 'Incorrect Matrix Number or Password';
                }

                //free result
                mysqli_free_result($result);
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }
        }
    }
?>