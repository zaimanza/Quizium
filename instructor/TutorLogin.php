<?php
include("../config/db_connect.php");
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
                    <a href="../"><span>Quizium</span></a>
                </h3>
            </div>
        </header>
    </header>
    <div class="container">
        <div class="inner-box">
            <h1>Welcome back,<p style="text-decoration: underline;">Instructors!</p></h1>
            <div class="subtext">
                sign in to continue
            </div>
            <form method="post">
                <?php include('../database/query/errors.php'); ?>
                <label>Username</label><br><input type="text" name="username" required>
                <br><br><label>Password</label><br><input type="password" name="password" required>
                <br><br>
                <div class="ketengahplis">
                    <input type="submit" value="Login" name="Login"><a href="TutorRegister.php">Sign up</a>
                </div>            
            </form>
            <br><br>
            <div class="subtext">
                Not an instructor? <a href="../student/StudentLogin.php">Click here</a>
            </div>
        </div>
    </div>
</body>
</html>