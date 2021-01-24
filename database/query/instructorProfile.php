<?php 
session_start();

$id = 2;

$sql = "SELECT * FROM `instructor`
        WHERE `instructorID` = $id";
$result = $conn->query($sql);

?>