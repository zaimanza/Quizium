<?php include("../config/db_connect.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/report.css">
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
                <li>
                    <a href="StudentHome.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="StudentProfile.php" >
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span>History</span>
                    </a>
                </li>
                <li>
                    <a href="StudentFeedback.php">
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="../database/query/logout.php?action=Logout">
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
                    <a href="StudentHome.php"><span>Quizium</span></a>
                </h3>
            </div>
        </header>
        <main>
             <h3 style="margin: 0px 60px; margin-top: 40px; color: #414141; font-size: 20px">List of taken quiz (<?php include ("../database/query/CountOneQuiz.php")?>)</h3>
            <div class="quiz-list">
                <table>
                    <tr>
                        <th>No.</th><th>Quiz name</th><th>Start date</th><th>End date</th><th>Score</th>
                    </tr>
                    <?php 
                        include("../database/query/OneQuiz.php"); 
                    
                        if($result-> num_rows >0) {
                        $i = 1;
                        while ($row = $result-> fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row["quizName"]?></td>
                        <td><?php echo $row["dateOpen"]?></td>
                        <td><?php echo $row["dateClose"]?></td>
                        <td><?php echo $row["mark"]?>%</td>
                    </tr>
                   <?php $i++; }
                   }?>
                </table>
            </div>
        </main>
    </div>
</body>
</html>