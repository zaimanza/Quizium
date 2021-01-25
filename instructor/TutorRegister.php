<?php

include("../database/query/Tutor.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/SignUpIn.css">
</head>
<body>
    <header>
        <header>
            <div class="website-name">
                <h3>
                    <span>Quizium</span>
                </h3>
            </div>
        </header>
    </header>
    <div class="container">
        <div class="inner-box">
            <h1>Sign up here, <p style="text-decoration: underline;">Instructors!</p></h1>
            <div class="subtext">
                let the fun begin
            </div>
            <form method="post">
                <?php include('../database/query/errors.php'); ?>
                <label>Full name</label><br><input type="text" name="name" required><br><br>
                <label>Username</label><br><input type="text" name="username" required>
                <br><br><label>Password</label><br><input type="password" name="password" required>
                <br><br>
                <div class="ketengahplis">
                    <input type="submit" name="Register" value="Register">
                </div>            
            </form>
            <br><br>
            <div class="subtext">
                <a href="TutorLogin.php">I already have an account</a>
            </div>
        </div>
    </div>
</body>
</html>