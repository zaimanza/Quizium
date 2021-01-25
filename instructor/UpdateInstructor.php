<?php
  	session_start();
    include '../config.php';
    //$adminID = $_SESSION['id'];
    $adminID = $_GET['adminID']; //Get id from URL
	$id = $_SESSION['id']; //id of the current user
	$_SESSION['adminID'] = $adminID;

    
    $query = "SELECT * FROM product";
    $result = $link->query($query);

//Bila user tekan save
  	if(isset($_POST["save"]))
  	{
        //Current user id
        $id = $_SESSION['id'];
        $productName = $_POST['productName'];
        $productQty = $_POST['productQty'];
        $productPrice = $_POST['productPrice'];

  		$file = $_FILES['file'];
  		$fileName = $_FILES['file']['name'];
  		$fileTmpName = $_FILES['file']['tmp_name'];
  		$fileSize = $_FILES['file']['size'];
  		$fileError = $_FILES['file']['error'];
  		$fileType = $_FILES['file']['type'];

  		$fileExt = explode('.', $fileName);
  		$fileActualExt = strtolower(end($fileExt));

  		$allowed = array('jpg', 'jpeg', 'png');

  		if(in_array($fileActualExt, $allowed))
  			{
  				if($fileError === 0)
  				{
  					if($fileSize < 10000000)
  					{
                    //to upload gambar and change the name so that bila user masuk nama sama dia tak clash
  						 $fileNameNew = uniqid('', true).".".$fileActualExt;
  						 $fileDestination = 'products/'.$fileNameNew;
  						 move_uploaded_file($fileTmpName, $fileDestination);

                        $query = "INSERT INTO product(`adminID`,`productName`, `productQty`, `productPrice`, `productImage`)
                        VALUES ('$adminID','$productName', '$productQty', '$productPrice', '$fileNameNew')";


         			if ($link->query($query))
               			{
               				echo ("<SCRIPT LANGUAGE='JavaScript'>
               				window.alert('New product is added!')
               				window.location.href='products.php'
                               </SCRIPT>");
               				exit();

               			}
               			else
               			{
               				echo ("<SCRIPT LANGUAGE='JavaScript'>
               				window.alert('An error occurred!')
               				window.location.href='products.php'
               				</SCRIPT>");
               				exit();
               			}

  					}
  					else
  					{
              echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('The size of the file is too big! Sorry, please try again!')
              window.location.href='products.php'
              </SCRIPT>");
              exit();
  					}
  				}
  				else
  				{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('There was an error uploading the file! Sorry, please try again!')
            window.location.href='products.php'
            </SCRIPT>");
            exit();
  				}
  			}
  			else
  			{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('You cannot upload files of this type! Sorry, please try again!')
          window.location.href='products.php'
          </SCRIPT>");
          exit();
  			}

  			mysqli_close($link);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraCream | Admin</title>
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    <link rel="shortcut icon" href="../img/logo.png">

     <!--Font Awesome for icons-->
     <script src="https://kit.fontawesome.com/3fad1024f6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main-container">
        <div class="aside">
            <div class="logo">
                <center><img src="../img/logo.png" alt="" width="150px" height="auto"></center>
                <a href="#">LaraCream</a>
                Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. 
            </div>
            <!--Navbar-->
            <ul class="nav">
                <li><a href="adminHome.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="adminUsers.php" ><i class="fa fa-user"></i> Manage User</a></li>
                <li><a href="products.php" class="active"><i class="fa fa-table"></i> Manage Products</a></li>
                <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
            </ul>
            <div class="copyright-text">
                &copy; 2020 LaraCream
            </div>
            <!--End navbar-->
        </div>
        <!--End aside-->
        <div class="main-content">
            <section class="about section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Manage Products</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        <form method="POST" enctype="multipart/form-data"> 
                            <div>
                                <label>Product Name</label>
                                    <input type="text" id="productName" name="productName" class="form-control" required><br>
                            </div>
                            <div>
                                <label>Product Quantity</label>
                                    <input type="text" id="productQty" name="productQty" class="form-control" required><br>
                            </div>
                            <div>
                                <label>Product Price</label>
                                    <input type="text" id="productPrice" name="productPrice" class="form-control" required><br>
                            </div>
                            <div>
                                <label>Product image</label>
                                    <input type="file" class="form-control" name="file" id="file" size="20" required>
                            </div>
                                <button class="btn btn-info" onclick="goBack()">Back</button>
                                <button type="submit" name="save" id="save" class="btn btn-success">Save</button>
                        </form>
                    </div>

                </div>
            </section>
            <!--About section end-->
        </div>
        <!--End main content-->
    </div>   
    <!--End main container--> 
</body>
</html>
