<?php 
session_start();

$id = $_SESSION["instructorID"];

$sql = "SELECT * FROM `instructor`
        WHERE `instructorID` = $id";
$result = $conn->query($sql);

?>