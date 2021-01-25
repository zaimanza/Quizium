<?php 
include ("../config/db_connect.php");
$code = $_GET['quizcode'];
$sql = "SELECT * FROM `quiz` q
        JOIN `quizquestion`  qq
        ON q.quizID = qq.quizID
        WHERE quizcode = '$code'";
$result = $conn->query($sql);
$result1 = $conn->query($sql);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body bgcolor="#A64AC9"> 
        <div class="question-container">
        <?php
        if($result-> num_rows > 0) {
            $i = 1; 
            while ($row = $result-> fetch_assoc()) {?>
            <div class="pages">
                <div class="ellipsis">
                    <p><?php echo $i?></p>
                </div>
            </div><?php
            $i++;
            }
            } 
            ?>
            <!-- id="answer_form" -->
            <div class="leave-btn">
                <a href="quiz-code.php"><button class="button btnLeave">LEAVE</button></a>
                <form  method="POST" action="../database/mutation/quiz/validateAnswer.php">
                <input type="submit" name="submit" class="button btnNext" value="FINISH">
            </div>

            <?php         
            if($result1-> num_rows > 0) {
                $index = 0;
                while ($row = $result1-> fetch_assoc()) { ?>
            <div data-repeater-list="group-a"class="question-details">
             <div data-repeater-item class="repeater-container">
                <p id="questName">QUESTION <?php echo $index;?></p>
                <div class="question">
                <?php echo $row['questionName'];?>
                <input type="hidden" id="quizid" name="quizid" value="<?php echo $row['quizID']?>">
                </div>
                <div class="answer">
                   <?php
                   if($row["questionType"] == "text")
                    {
                        ?><p>Answer</p>
                          <textarea rows="3" cols="50" id="answer" name="answer[<?php echo $index?>]" id="answer" required></textarea><?php
                    }
                    if($row["questionType"] == "radio")
                    {
                        ?>
                        <p>a. &nbsp <input type="radio" id="answer" name="answer[<?php echo $index?>]" value="<?php echo $row['answer1']?>"> &nbsp <?php echo $row['answer1']?></p>
                        <br>
                        <p>b. &nbsp <input type="radio" id="answer" name="answer[<?php echo $index?>]" value="<?php echo $row['answer2']?>"> &nbsp <?php echo $row['answer2']?></p>
                        <br>
                        <p>c. &nbsp <input type="radio" id="answer" name="answer[<?php echo $index?>]" value="<?php echo $row['answer3']?>"> &nbsp <?php echo $row['asnwer3']?></p><?php
                    }
                   ?> 
                </div>
                </div>
                <?php 
                $index++;}
                } ?>
                <div class="leave-btn" style="margin:50px 0px">
                <input type="submit" name="submit" value="FINISH" class="button btnNext">
               </form>
               </div>
            </div>
        </div>
        
        <script src="../js/validate.js"></script>
    </body>
</html>