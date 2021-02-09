<?php 
include ("../../config/db_connect.php");
session_start();

if(isset($_POST["update"])){

        $id = $_SESSION["instructorID"];
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        

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

                                $finduser = "SELECT * FROM instructor WHERE ipassword = '$pass'";
                                $result = $conn->query($finduser);
                                $user = mysqli_fetch_assoc($result);

                                if($user)
                                {

                                          //kalau both gambar and nama ada
                                                $sql = "UPDATE `instructor`
                                                SET name = '$name', imgName = '$fileNameNew'
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
                                else{
                                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                        window.alert('Incorrect password! Please try again')
                                                        window.location.href='../../instructor/profile.php'
                                                       </SCRIPT>");
                                }                   

                        }
                }
        }
        else if(empty($fileTmpName)){ //kalau no gambar

                $finduser = "SELECT * FROM instructor WHERE ipassword = '$pass'";
                                $result = $conn->query($finduser);
                                $user = mysqli_fetch_assoc($result);

                                if($user)
                                {
                                        $sql = "UPDATE `instructor`
                                        SET name = '$name'
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
                                else {
                                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                        window.alert('Incorrect password! Please try again')
                                                        window.location.href='../../instructor/profile.php'
                                                       </SCRIPT>");
                                } 
        } 
        else {
                $fileNameNew = "";
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('You cannot upload files of this type! Sorry, please try again!')
                window.location.href='../../instructor/profile.php'
                </SCRIPT>");
                exit();
        }
}
?>