<?php
$hostname="localhost";
$user="root";
$password="";
$database="survey_submission";
$connect=mysqli_connect($hostname,$user,$password,$database) or die("<script> alert('Faild to connect!')</script>");
?>