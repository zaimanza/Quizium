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
        <form class="repeater" id="quiz_form">
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
                            <input type="datetime-local" name="openDate" value="<?php echo $row["dateOpen"]?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <p class="title">DESCRIPTION</p>
                           <input type="text" name="description" value="<?php echo $row["quizDescription"]?>">
                        </td>
                        <td class="right">
                            <p class="title">END DATE AND TIME</p>
                             <input type="datetime-local" name="closeDate" value="<?php echo $row["dateClose"]?>">
                        </td>
                    </tr>
                    <?php }
                   } ?>
                </table>
        </div>
        <?php    
                include ("../database/mutation/quiz/viewquizquestionbyid.php");
                if($result-> num_rows >0) {
                    $i = 1;
                        while ($row = $result-> fetch_assoc()) {
            ?>

            <div data-repeater-list="group-a" class="cntdelegate" id="quiz-question">
                    <div data-repeater-item class="repeater-container">
                        <div class="question-box">
                            <input type="text" id="questName" class="questName" name="questName" placeholder="Add a question" value="<?php echo $row["questionName"]?>">
                            <div class="action">
                                <select onchange="questionType(this)">
                                    <option value="" disabled selected>Select question type</option>
                                    <option value="mcq">Multiple choice</option>
                                    <option value="text">Simple text</option>
                                </select>
                            </div>
                        <hr>
                        <?php
                        if($row["questionType"] == "radio") {
                        ?>
                        <div class="mcq answer-container">
                            Enter answer choices and select the correct answer:<br>
                            a. &nbsp; <input type="radio" name="ansrad" value="1">
                                        <input type="text" name="radio1" id="radio1" value="<?php echo $row["answer1"]?>"><br>
                            b. &nbsp; <input type="radio" name="ansrad" value="2">
                                        <input type="text" name="radio2" id="radio2" value="<?php echo $row["answer2"]?>"><br>
                            c. &nbsp; <input type="radio" name="ansrad" value="3">
                                        <input type="text" name="radio3" id="radio3" value="<?php echo $row["asnwer3"]?>">
                        </div>
                        <?php } 
                        else if($row["questionType"] == "text")?>
                        <div class="text answer-container">
                            Enter 3 possible correct(only) answers:<br>
                            1. &nbsp;<input type="text" name="text1" id="text1" value="<?php echo $row["answer1"]?>"><br>
                            2. &nbsp;<input type="text" name="text2" id="text2" value="<?php echo $row["answer2"]?>"><br>
                            3. &nbsp;<input type="text" name="text3" id="text3" value="<?php echo $row["asnwer3"]?>">
                        </div>
                        <?php } ?>
                    </div>
                    
                    <!-- tukar jadi delete question by id-->
                    <a data-repeater-delete>Remove </a>
                    <div class="clear"></div>
                </div>

            <?php }
            ?>
        
            <span id="writeroot"></span>
            <button  type="submit" class="button btn1" id="submit" name="submit"><span>Update</span></button>
            <div class="clear"></div>
        </form>

        <div class="icon-bar" data-repeater-create>
        <p>+</p>
        </div>
    </div>
    
    <script src="../js/modal.js"></script>
    <script src="../js/edit.js"></script>  
</body>
</html>