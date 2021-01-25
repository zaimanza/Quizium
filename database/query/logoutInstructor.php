<?php

    $action =$_GET['action'];
    if ($action=='Logout')
    {
      session_destroy();
      unset($_SESSION['username']);
      header('location: ../../index.html');
    }

 ?>