<?php 
include("../config/db_connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <style>
            .alert-error{
                margin: 5px 0px;
                padding: 5px 0px;
                text-align:center;
                color: #CD0618;
                font-weight:500;
                border: solid red;
                border-radius: 25px;
            } 
        </style>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body bgcolor="#A64AC9">
    
        <div class="code-container">
                <a href="StudentHome.php"><h4>Quizium</h4></a>
            <form action="../database/query/findQuiz.php" method="GET">
            <?php 
                if(isset($_GET['validate'])  == 'false'){
                    ?><div class="alert-error">
                        <?php echo "Contact your instructor for a valid code";?>
                </div> <?php
                }?>
                <div class="code-input">
                    <input type="text" name="code" placeholder="ENTER CODE" required>
                </div>
                <div style="display: flex; align: center; padding-left: 30px; ">  
                    <a href="studenthome.php"><input value="Cancel" class="button btn4"></a>
                    <input type="submit" name="submit" value="Go >" class="button btn3">
                </div>
                
            </form>
        </div>
    </body>
</html>