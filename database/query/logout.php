<?php

    $action =$_GET['action'];
    if ($action=='Logout')
    {
      session_destroy();
      unset($_SESSION['matrix']);
      header('location: ../../welcome.html');
    }

 ?>