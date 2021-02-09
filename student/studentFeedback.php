<?php 

    $title = $msg = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // the message
        if(!empty($_POST['title'])){
            $title = $_POST['title'];
        }
        if(!empty($_POST['message'])){
            $msg = $_POST['message'];
            $msg = wordwrap($msg,70);
        }

        // send email
        mail("zaiman670@gmail.com",$title,$msg);
        
        header('Location: StudentHome.php');
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
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

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="validateForm()"> 
        <div class="quizdetail-container" style="height: 400px; margin-top: 120px;">
                <div>
                    <h4><i class="fas fa-comments" style="color: #414141; font-size: 25px"></i> &nbsp&nbspFEEDBACK</h4>
                    
                    <p>Share your honest thoughts on what you love or wishes Quizium to improve on!</p>
                    <label>TITLE</label>
                    <input type="text" id="title" name="title" class="form-control" required><br>
                </div><br>
                <div>
                    <label>MESSAGE</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" class="form-control" required></textarea><br>
                </div>
                <br>
        </div>
        <div style="width: 240px; display: flex; margin: auto;">  
                    <a href="studenthome.php"><input value="Cancel" class="button btn4"></a>
                    <input type="submit" name="send" id="send" class="button btn3" value="Submit">
                </div>
        </form>
        <script>
            function validateForm() {
                alert("You have submited an email to Quizium");
            }
        </script>
    </body>
</html>