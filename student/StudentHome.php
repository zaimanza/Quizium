<?php
 include ("../config/db_connect.php");
 include("../database/query/Student.php");
 $SID = $_SESSION['studentID'];
 $getData = "SELECT * FROM answeredquiz aq 
             JOIN quiz q ON aq.quizID = q.quizID 
             JOIN instructor i 
             ON q.instructorID = i.instructorID 
             WHERE aq.studentID= '$SID' LIMIT 0,2";
 $result = mysqli_query($conn,$getData);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/studenthome.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-user">
            <img src="../image/bear.png">
            <div class="user-image">
                <p>Student</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <hr>
            <ul>
                <li class="active">
                    <a href="StudentHome.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="StudentProfile.php">
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="StudentHistory.php">
                        <span>History</span>
                    </a>
                </li>
                <li>
                    <a href="database/query/logout.php?action=Logout">
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="website-name">
                <h3>
                    <span>Quizium</span>
                </h3>
            </div>
        </header>
    </div>

    <div class="content">
        <div class="box-1">
            <h4>Have you studied today?</h4>
            <div class="box1-content">
                <div class="listing">
                    <ul>
                        <li>Join quizzes by entering code</li>
                        <li>Compete against classmates!</li>
                        <li>Strengthen your thinking skills</li>
                    </ul>
                </div>
                <div class="sideimg">
                    <img src="../image/thumbs-up.png" style="width:250px;
                    height: auto;">
                </div>
            </div>
        </div>
        <br><br>
        <div class="History-lists">
            <div class="kotak-atas">
                <h4>Recent</h4>
                <a href="StudentHistory.php">View more»</a>
            </div>
            
                <?php   
                    if($result)
                    {
                        foreach($result as $row)
                        {
                            echo "<div class='kotak-bawah'>";
                            echo "<div class='quizname-text'>";
                            echo $row["quizName"]."</div>";
                            echo "<div class='flex-them'>by <div class='lect-name'>".$row["name"]."</div></div>";
                           
                            echo "</div>";
                        }
                        
                    } 
                ?>
            </div>
        </div>
        <a href="quiz-code.php"><button class="button btn1">Join Quiz</button></a>
    </div>
</body>
</html>