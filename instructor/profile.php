<?php 
include("../config/db_connect.php");
include("../database/query/instructorProfile.php");
$imageURL1 = "";
            $row1 = $result-> fetch_assoc();
            if(!empty($row1["imgName"])){
                $imageURL1 = '../imgInstructor/'.$row1["imgName"];
            } else {
                $imageURL1 = "../image/fox.png";
            }

            
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
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-user">
        <?php 
            
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
                <li class="active">
                    <a href="#" >
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="report.php">
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
            <div class="profle-container">
                <form method="POST" action="../database/query/instructorProfileUpdate.php" enctype="multipart/form-data">
                   
                    <img src="<?php echo $imageURL1; ?>"></img>
                    <p><input type="file" name="file" id="file"></p>

                    <div class="details">
                    
                        <p>Name</p>
                        <input type="text" name="name" value="<?php echo $row1["name"];?>">
                        <p>Password</p>
                        <input type="password" name="pass" required>
             
                    </div>

                    <input type="submit" name="update" value="Save" id="update" class="button btn2">
                </form>

            </div>
        </main>
    </div>

    <script>
    $(document).ready(function(){
        $('#update').click(function(){
            var image_name = $('#image').val();
            if(!image_name == '')
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
                {
                    alert('Please insert image of file type .gif/.png/.jpg or .jpeg only!');
                    $('#image').val('');
                    return false;
                }
            }
        })
    })
    </script>
</body>
</html>