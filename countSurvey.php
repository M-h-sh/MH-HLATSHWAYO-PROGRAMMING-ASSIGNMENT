<?php

//count all surveys
$results = mysqli_query($connect, "SELECT * FROM survey");
if($results){
$all = mysqli_num_rows($results);
}
?>