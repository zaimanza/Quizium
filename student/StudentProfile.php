<?php 
 include ("../config/db_connect.php");
 include("../database/query/Student.php");

 $SID=$_SESSION["studentID"];
 $matrix =$_SESSION["matrix"];
 
 $getData = "SELECT * FROM student WHERE studentID = '$SID'";
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
                <li>
                    <a href="StudentHome.php">
                        <span>Home</span>
                    </a>
                </li>
                <li class="active">
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
    </div>
    <div class="content">
        <div class="profilebox">
            <form method=GET>
                <div class="change-img">
                    <img src="../image/bear.png"><br>
                </div>
                <h4>User Profile</h4>
                <table class="student">
                        <tr>
                            <td><label>Quizium ID </label></td>
                            <td><label>: </label></td>
                            <td><input type="text" disabled value="<?php echo $SID?>"><br></td>
                        </tr>
                        <tr>
                            <td><label>Matrix number </label></td>
                            <td><label>:</label></td>
                            <td><input type="text"  disabled value="<?php echo $matrix?>"></td>
                        </tr>
                        <tr>
                            <td><label>Full name </label></td>
                            <td><label>:</label></td>
                            <td><input type="text" disabled value=
                                "<?php 
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            echo $row["studentName"];
                                        }
                                    }
                                ?>">
                            </td>
                        </tr>
                    </table>
            </form>
        </div>
    </div>
</body>
</html>