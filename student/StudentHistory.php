<?php
 include ("../config/db_connect.php");
 include("../database/query/Student.php");
 $SID = $_SESSION['studentID'];
 $getData = "SELECT * FROM answeredquiz aq JOIN instructor i ON aq.instructorID = i.instructorID JOIN student s ON aq.studentID = s.studentID WHERE aq.studentID= '$SID'";
 $result = mysqli_query($conn,$getData);
?>
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../css/style.css">
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
                    <a href="StudentProfile.php">
                        <span>My Profile</span>
                    </a>
                </li>
                <li class="active">
                    <a href="StudentHistory.php">
                        <span>History</span>
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
                    <span>Quizium</span>
                </h3>
            </div>
        </header>

        <div class="content">
            <main>
                <div class="sorting">
                    <div class="quizTot">
                        Quiz(N)
                    </div>
                    <div class="sortBy">
                        <p>Sort By:</p>
                        <select name="sortBy">
                            <option value="recent">Most recent</option>
                            <option value="recent">Oldest</option>
                        </select>
                        <p>Search quiz:</p>
                        <input type="text">
                    </div>
                </div>
            </main>
            <br><br>
            <div class="History-lists">
                <h4>Recent</h4>
                <?php   
                    if($result)
                    {
                        echo "<table border='1' class='student'>
                                <tr>
                                <th>Quiz name</th>
                                <th>Instructor name</th>
                                <th>matrix num</th>
                                <th>Grade</th>
                                </tr>";
                            foreach($result as $row)
                            {
                                echo "<tr>";
                                echo "<td>".$row["quizName"]."</td>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["matrixNum"]."</td>";
                                echo "<td>".$row["grade"]."</td>";
                                echo"</tr>";
                            }
                        echo "</table>";
                    } 
                ?>
            </div>
    </div>
</body>
</html>