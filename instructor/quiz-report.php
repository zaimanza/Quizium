<?php 
include ("../config/db_connect.php");
$id = $_GET['quizID'];

$query = "SELECT * FROM quiz 
          WHERE quizid = $id";
$result = $conn->query($query);

?>
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
            <img src="../image/fox.png">
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
            <div class="report-box">
                <div class="heading"><?php
                $insTargetStud = '';
                if($result-> num_rows >0) {
                        while ($row = $result-> fetch_assoc()) {?>
                    Quiz Analysis Report: <?php echo $row["quizName"];
                    $insTargetStud = $row["numStudents"];
                    ?>
                </div>
                <div class="analysis">
                    <div class="boxes">
                        <?php echo $row["dateOpen"];?>
                        <p>Date start</p>
                    </div>
                    <div class="boxes">
                    <?php echo $row["dateClose"];?>
                        <p>Date end</p>
                    </div>
                    <div class="boxes">
                    <?php echo $row["quizCode"];?>
                        <p>Quiz code</p>
                    </div>
                    <?php }
                    }?>
                    <div class="boxes">
                        <?php 
                            $cur = "SELECT COUNT(DISTINCT StudentID) FROM answeredquiz WHERE quizID= $id";

                            $curCount = mysqli_query($conn, $cur);
                            if($curCount-> num_rows >0) {
                                while ($rox = $curCount-> fetch_assoc()) {

                                    echo $rox["COUNT(DISTINCT StudentID)"];
                                    echo " of ";
                                    echo $insTargetStud;
                                }
                            }
                        ?>
                        <p>Students Answered</p>
                    </div>
                </div>

                <?php 
                
                $query = "SELECT answeredquiz.*, student.* 
                        FROM answeredquiz INNER JOIN student 
                        ON answeredquiz.StudentID = student.studentID 
                        WHERE answeredquiz.quizID = $id";

                $mql = "SELECT answeredquiz.*, student.* 
                FROM answeredquiz INNER JOIN student ON answeredquiz.StudentID = student.studentID 
                WHERE answeredquiz.quizID = $id";
                $result2 = $conn->query($mql);
                $ron = mysqli_fetch_all($result2, MYSQLI_ASSOC);

                $result1 = mysqli_query($conn, $query);

                ?>
                <div class="table-container">
                <table>
                    <tr>
                        <th>No.</th><th>Student name</th><th>Mark(%)</th><th>Pass/Fail</th>
                    </tr>
                    <?php
                    if($result1-> num_rows >0) {
                        $i = 1;
                         while ($row = $result1-> fetch_assoc()) {?>
                    <tr>
                        <td><?php  echo $i; ?></td>
                        <td><?php  echo $row["studentName"]?></td>
                        <td><?php  echo $row["mark"]?></td>
                        <td>
                        <?php
                        if($row["mark"] >= 50)
                        {
                            ?><button class="button btnPass">Pass</button><?php
                        }
                        else
                        {
                            ?><button class="button btnFail">Fail</button><?php
                        }
                        ?></td>
                    </tr>
                    <?php $i++; }
                    } ?>
                </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>