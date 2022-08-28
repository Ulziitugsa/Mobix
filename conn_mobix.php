<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "mobix";
$link = mysqli_connect($server, $user, $pass, $database) or die("Error ". mysqli_error($link));
?>