<?php 
include ("../config/db_connect.php");
$quizid = $_GET['quizid'];
$id = $_GET['id'];
//session studentid
session_start();
$studentid = $_SESSION['studentID'];
$sql = "SELECT * FROM `answeredquiz` aq 
        JOIN `quiz` q ON aq.quizID = q.quizID 
        WHERE aq.StudentID = $studentid AND aq.quizID = $quizid AND aq.answeredQuizID = $id";
$result = $conn->query($sql);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body bgcolor="#A64AC9"> 
     <header>
        <div class="website-name">
            <h3>
                <a href="StudentHome.php"><span>Quizium</span></a>
            </h3>
      </div>
        </header>
        <div class="quizdetail-container"><?php
        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) { ?>
            <h4>CONGRATULATIONS FOR COMPLETING!</h4>
            <p>QUIZ TITLE</p>
            <input type="text" value="<?php echo $row['quizName']?>">
            <p>MARK</p>
            <input type="text" value="<?php echo $row['mark']?>%">
            <?php }
        } ?>
        </div>
        <a href="StudentHome.php"><button name="submit" class="button btn3">Next</button></a>
    </body>
</html>