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
                <a href="index.php"><span>Quizium</span></a>
                </h3>
            </div>
        </header>
        <main>
        
            <?php
                include("../database/query/OneStudentGrades.php"); 
            
                if($result-> num_rows >0) {
                    $i = 1;
                    while ($row = $result-> fetch_assoc()) {
                    }
                }
            ?>
            <div class="report-box">
            
                <div class="heading">
                    Quiz Analysis Report: title
                </div>
                <div class="analysis">
                    <div class="boxes">
                        93.75%
                        <p>Passing Rate</p>
                    </div>
                    <div class="boxes">
                        test
                        <p>Pass Count</p>
                    </div>
                    <div class="boxes">
                        test
                        <p>Average Attempt per Class</p>
                    </div>
                    <div class="boxes">
                        test
                        <p>Failing Rate</p>
                    </div>
                    <div class="boxes">
                        test
                        <p>Fail Count</p>
                    </div>
                    <div class="boxes">
                        test
                        <p>Average Attempt per Fail</p>
                    </div>
                </div>
                <div class="table-container">
                <table>
                    <tr>
                        <th>No.</th><th>Student name</th><th>Total correct</th><th>Total wrong</th><th>Mark(%)</th><th>Pass/Fail</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Database</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="button btnPass">Pass</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Human-Computer Interaction</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="button btnFail">Fail</button></td>
                    </tr>
                   
                </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>