<?php 
include ("../../config/db_connect.php");
session_start();

if(isset($_POST["update"])){

        $id = 2;
        $name = $_POST["name"];
        $oldPass = $_POST["oldPass"];
        $newPass = $_POST["newPass"];
        $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
        
        if(substr($imageType,0,5) == "image")
        {
                $sql = "UPDATE `instructor`
                        SET name = $name, password = $newPass, imageName = $imageName, imageData = $imageData
                        WHERE instructorID = $id";
                
                if(mysqli_query($conn, $sql)){
                        header("Location: ../../instructor/profile.php");
                        echo "<script> alert('Profile updated successfully!') </script>";
                    } else {
                        echo 'query error: ' . mysqli_error($conn);
                    }
        }
        else 
        {
                echo "Only images allowed!";
        }
}
?>

<!--?php
        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
        {
                $id = $_GET['edit_id'];
                $stmt_edit = $DB_con->prepare('SELECT userName, userProfession, userPic FROM tbl_users WHERE userID =:uid');
                $stmt_edit->execute(array(':uid'=>$id));
                $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
                extract($edit_row);
        }
        else
        {
                header("Location: index.php");
        }
        
        if(isset($_POST['btn_save_updates']))
        {
                $username = $_POST['user_name'];// user name
                $userjob = $_POST['user_job'];// user email
                
                $imgFile = $_FILES['user_image']['name'];
                $tmp_dir = $_FILES['user_image']['tmp_name'];
                $imgSize = $_FILES['user_image']['size'];
        
        if($imgFile)
        {
                $upload_dir = 'user_images/'; // upload directory 
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $userpic = rand(1000,1000000).".".$imgExt;
        if(in_array($imgExt, $valid_extensions))
        {   
        if($imgSize < 5000000)
        {
                unlink($upload_dir.$edit_row['userPic']);
                move_uploaded_file($tmp_dir,$upload_dir.$userpic);
        }
        else
        {
                $errMSG = "Sorry, your file is too large it should be less then 5MB";
        }
        }
        else
        {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
        } 
        }
        else
        {
                // if no image selected the old image remain as it is.
                $userpic = $edit_row['userPic']; // old image from database
        } 
        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
                $stmt = $DB_con->prepare('UPDATE tbl_users 
                        SET userName=:uname, 
                        userProfession=:ujob, 
                        userPic=:upic 
                        WHERE userID=:uid');
                $stmt->bindParam(':uname',$username);
                $stmt->bindParam(':ujob',$userjob);
                $stmt->bindParam(':upic',$userpic);
                $stmt->bindParam(':uid',$id);
        
        if($stmt->execute()){
        ?>
                <script>
                        alert('Successfully Updated ...');
                        window.location.href='index.php';
                </script>

        }
        else{
                $errMSG = "Sorry Data Could Not Updated !";
        }
        }    
}
?-->