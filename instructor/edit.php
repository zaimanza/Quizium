<?php 
include ("../config/db_connect.php");
include ("../database/mutation/quiz/viewquizbyid.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/create.css">   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
</head>

<body>
    <header>
        <div class="website-name">
            <h3>
                <a href="index.php"><span>Quizium</span></a>
            </h3>
        </div>
    </header>
   <div class="main">
        <form method="POST" action="../database/mutation/quiz/updateQuiz.php">
        <div class="quiz-details">
                <p class="header">Update Quiz</p>
                <table>

                 <?php 
                    if($result-> num_rows >0) {
                    $i = 1;
                    while ($row = $result-> fetch_assoc()) {
                 ?>
                    <tr>
                        <td>
                          <p class="title">TITLE</p>
                          <input type="text" name="quizName" value="<?php echo $row["quizName"]?>">
                        </td>
                        <td class="right">
                            <p class="title">START DATE AND TIME</p>
                            <input type="datetime-local" name="openDate" value="<?php echo (strtotime($row["dateClose"]))?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <p class="title">DESCRIPTION</p>
                           <input type="text" name="description" value="<?php echo $row["quizDescription"]?>">
                        </td>
                        <td class="right">
                            <p class="title">END DATE AND TIME</p>
                             <input type="datetime-local" name="closeDate" value="<?php echo (strtotime($row["dateClose"]))?>" required>
                             <input type="hidden" name="quizid" value="<?php echo $row["quizID"]?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <p class="title">NUMBER OF STUDENTS</p>
                           <input type="number" name="numStudents" value="<?php echo $row["numStudents"]?>">
                        </td>
                    </tr>
                    <?php }
                   } ?>
                </table>
        </div>
    
            <span id="writeroot"></span>
            <button  type="submit" class="button btn1" name="submit"><span>Update</span></button>
            <div class="clear"></div>
        </form>
    </div>
    
    <script src="../js/modal.js"></script>
    <script src="../js/edit.js"></script>  
</body>
</html>