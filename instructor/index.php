<?php 
include("../config/db_connect.php");
include("../database/query/instructorProfile.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
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
                <li class="active">
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="report.php">
                        <span>Report</span>
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
                <a href="#"><span>Quizium</span></a>
                </h3>
            </div>
        </header>
        <main>
            <div class="sorting">
                <div class="quizTot">
                    Quiz(<?php include ("../database/mutation/Quiz/countQuiz.php")?>)
                </div>
                <div class="sortBy">
                    <p>Sort by:</p>
                    <select name="sortBy">
                        <option value="recent">Most recent</option>
                        <option value="recent">Oldest</option>
                    </select>
                    <p>Search quiz:</p>
                    <input type="text">
                </div>
            </div>
            <div class="card-container">
            <?php 
            include("../database/mutation/quiz/viewquiz.php"); 
            
                  if($result-> num_rows >0) {
                  $i = 1;
                  while ($row = $result-> fetch_assoc()) {
            ?>
            <div class="card-quiz">
                <div class="quiz-name">
                    <p><?php echo $row["quizName"]?></p>
                    <a href="../database/mutation/quiz/deletequiz.php?id=<?php echo $row["quizID"]; ?>" class="left"><i class="fas fa-trash-alt" onClick="return confirm('Are you sure to remove this quiz?')" aria-hidden="true"></i></a>
                    <div class="left-left"><a href="edit.php?id=<?php echo $row["quizID"]; ?>"><i class="fas fa-edit"></i></a></div>
                </div>
                
                           
                <div class="card-desc">
                    <p><?php echo $row["quizDescription"]?></p>
                </div>

                <div class="quiz-code">
                    <p id="code"><?php echo $row["quizCode"]?></p>
                </div>

                <div class="quiz-copy">
                    <i class="far fa-copy" onClick="copy2Clipboard()"></i>
                </div>
            </div>
            <?php }
            } ?>
            </div>
           <a href="create.php"><button class="button btn1"><span>Create</span></button></a>

             <!-- modal -->
              <div class="modal" id="myModal">
                <!-- modal content-->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4>Delete Quiz</h4>
                    <p>You are about to delete --quiz name--.</p>

                    <div class="action-btn">
                        <a href="../database/mutation/quiz/deletequiz.php?id=<?php echo $row["quizID"]; ?>"><button class="button btnDelete">Delete</button></a>
                    </div>
                </div>
             </div>
        </main>
    </div>

    <script src="../js/index.js"></script>
    </body>

</html>