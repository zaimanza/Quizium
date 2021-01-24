<?php include("../config/db_connect.php"); ?>

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
                <p class="header">Create a new quiz</p>
                <table>
                    <tr>
                        <td>
                          <p class="title">TITLE</p>
                          <input type="text" name="quizName" placeholder="Enter a title, eg: “Mathematics Exercise 1: Algebra”" required>
                        </td>
                        <td class="right">
                            <p class="title">START DATE AND TIME</p>
                            <input type="datetime-local" name="openDate" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <p class="title">DESCRIPTION</p>
                           <input type="text" name="description" placeholder="Add a description..." required>
                        </td>
                        <td class="right">
                            <p class="title">END DATE AND TIME</p>
                             <input type="datetime-local" name="closeDate" required>
                        </td>
                    </tr>
                </table>
            </div>

            <div data-repeater-list="group-a" class="cntdelegate" id="quiz-question">
                <div data-repeater-item class="repeater-container">
                    <div class="question-box">
                        <input type="text" id="questName" class="questName" name="questName" placeholder="Add a question" required>
                        <div class="action">
                            <select onchange="questionType(this)">
                                <option value="" disabled selected>Select question type</option>
                                <option value="mcq">Multiple choice</option>
                                <option value="text">Simple text</option>
                            </select>
                        </div>
                    <hr>
                    <div class="mcq answer-container">
                        Enter answer choices and select the correct answer:<br>
                        a. &nbsp; <input type="radio" name="ansrad" value="1">
                                    <input type="text" name="radio1" id="radio1" placeholder="Enter answer"><br>
                        b. &nbsp; <input type="radio" name="ansrad" value="2">
                                    <input type="text" name="radio2" id="radio2" placeholder="Enter answer"><br>
                        c. &nbsp; <input type="radio" name="ansrad" value="3">
                                    <input type="text" name="radio3" id="radio3" placeholder="Enter answer">
                    </div>
                    <div class="text answer-container">
                        Enter 3 possible correct(only) answers:<br>
                        1. &nbsp;<input type="text" name="text1" id="text1" placeholder="Enter correct answer 1"><br>
                        2. &nbsp;<input type="text" name="text2" id="text2" placeholder="Enter correct answer 2"><br>
                        3. &nbsp;<input type="text" name="text3" id="text3" placeholder="Enter correct answer 3">
                    </div>
                </div>
               
                <a data-repeater-delete>Remove </a>
                <div class="clear"></div>
            </div>
        
            <span id="writeroot"></span>
            <button  type="submit" class="button btn1" id="submit" name="submit"><span>Create</span></button>
            <div class="clear"></div>
        </form>

        <div class="icon-bar" data-repeater-create>
        <p>+</p>
        </div>
    </div>
    
    <script src="../js/modal.js"></script>
    <script src="../js/create.js"></script>  
</body>
</html>