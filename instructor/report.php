<?php include("../config/db_connect.php");

include("../database/query/instructorProfile.php");?>
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
        <?php 
            $imageURL1 = "";
            $row1 = $result-> fetch_assoc();
            if(!empty($row1["imgName"])){
                $imageURL1 = '../imgInstructor/'.$row1["imgName"];
            } else {
                $imageURL1 = "../image/fox.png";
            }
        ?>
            <img src="<?php echo $imageURL1;?>">
            <div class="user-image">
                <p>Instructor</p>
            </div>
        </div>
        <div class="sidebar-menu">
            <hr>
            <ul>
                <li>
                    <a href="index.php">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php" >
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span>Report</span>
                    </a>
                </li>
                <li>
                    <a href="InstructorFeedback.php">
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="../database/query/logoutInstructor.php?action=Logout">
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
                <a href="index.php"><span>Quizium</span></a>
                </h3>
            </div>
        </header>
        <main>
            <h3 style="margin: 0px 60px; margin-top: 40px; color: #414141; font-size: 20px">List of Quizzes (<?php include ("../database/mutation/Quiz/countQuiz.php")?>)</h3>

            <div class="quiz-list">
                <table>
                    <tr>
                        <th>No.</th><th>Quiz name</th><th>Start date</th><th>End date</th><th>Action</th>
                    </tr>
                    <?php 
                    include("../database/mutation/quiz/viewquiz.php"); 
                    
                        if($result-> num_rows >0) {
                        $i = 1;
                        while ($row = $result-> fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row["quizName"]?></td>
                        <td><?php echo $row["dateOpen"]?></td>
                        <td><?php echo $row["dateClose"]?></td>
                        <td><a href="quiz-report.php?quizID=<?php echo $row['quizID']?>"><button class="button btnView">View</button></a></td>
                    </tr>
                   <?php $i++; }
                   }?>

                </table>
            </div>
        </main>
    </div>
</body>
</html>