<?php 
include ("../../config/db_connect.php");
session_start();

if(isset($_POST["update"])){

        $id = $_SESSION["instructorID"];
        $name = $_POST["name"];
        $newPass = $_POST["newPass"];
        

        $file = $_FILES['file'];
  	$fileName = $_FILES['file']['name'];
  	$fileTmpName = $_FILES['file']['tmp_name'];
  	$fileSize = $_FILES['file']['size'];
  	$fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
          
        $allowed = array('jpg', 'jpeg', 'png');
                  
        if(in_array($fileActualExt, $allowed)) {
                if($fileError === 0) {
                        if($fileSize < 10000000) {
                                $fileNameNew = uniqid('', true).".".$fileActualExt;
                                $fileDestination = '../../imgInstructor/'.$fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);
                        }
                }
        } else {
                $fileNameNew = "";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('You cannot upload files of this type! Sorry, please try again!')
                window.location.href='profile.php'
                </SCRIPT>");
                exit();
        }
        $sql = "UPDATE `instructor`
        SET name = '$name', password = '$newPass', imgName = '$fileNameNew'
        WHERE instructorID = $id";
                
        if(mysqli_query($conn, $sql)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Profile successfully updated!')
                        window.location.href='../../instructor/profile.php'
                       </SCRIPT>");
        } else {
                echo 'query error: ' . mysqli_error($conn);
        }
        
}
?>