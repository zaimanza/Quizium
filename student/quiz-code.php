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
        <div class="code-container">
            <h4>Quizium</h4>
            <form action="../database/query/findQuiz.php" method="GET">
                <div class="code-input">
                    <input type="text" name="code" placeholder="ENTER CODE">
                </div>
                <input type="submit" name="submit" value="Go" class="button btn3">
                <?php 
                if(isset($_GET['validate'])  == 'false'){
                    ?><div class="alert error">
                        <?php echo "Contact your instructor for a valid code";?>
                </div> <?php
                }?>
            </form>
        </div>
    </body>
</html>