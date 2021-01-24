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
                    <a href="">
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