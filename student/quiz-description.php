<?php 
include("../config/db_connect.php");
$code = $_GET['quizCode'];
$sql = "SELECT * FROM quiz q
        JOIN instructor i
        ON q.instructorID = i.instructorID
        WHERE quizcode = '$code'";
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
            <p>TITLE</p>
            <input type="text" value="<?php echo $row['quizName']?>">
            <p>INSTRUCTOR</p>
            <input type="text" value="<?php echo $row['name']?>">
            <p>START TIME</p>
            <input type="text" value="<?php echo $row['dateOpen']?>">
            <p>END TIME</p>
            <input type="text" value="<?php echo $row['dateClose']?>">
            <?php }
        } ?>
        </div>
        <div style="width: 110px; display: block; margin: auto;"> 
        <a href="quiz.php?quizcode=<?php echo $code?>"><button name="submit" class="button btn3">Go</button></a>
        </div>
    </body>
</html>