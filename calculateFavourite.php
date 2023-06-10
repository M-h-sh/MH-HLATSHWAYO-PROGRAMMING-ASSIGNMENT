<?php

//count all People who Like Pizza
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food='Pizza'");
if($results){
$PizzaCount = mysqli_num_rows($results);
}
//count all People who Like Pasta
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food='Pasta'");
if($results){
$PastaCount = mysqli_num_rows($results);
}
//count all People who Like Pap And Wors
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food='Pap and Wors'");
if($results){
$PapAndWors = mysqli_num_rows($results);
//count all People who Like Chicken
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food='Chicken stir fry'");
if($results){
$chickenCount = mysqli_num_rows($results);
}
//count all People who Like Beef
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food=' Beef stir fry'");
if($results){
$BeefCount = mysqli_num_rows($results);
}
//count all People who Like Other Food
$results = mysqli_query($connect, "SELECT * FROM survey WHERE food=' Other'");
if($results){
$OtherCount = mysqli_num_rows($results);
}
$totalfood=$PizzaCount+$PastaCount+$PapAndWors+$chickenCount+$BeefCount+$OtherCount;
$pizzaPerc=round($PizzaCount/$totalfood*100,1);
$pastaPerc=round($PastaCount/$totalfood*100,1);
$worsPerc=round($PapAndWors/$totalfood*100,1);
$chickenPerc=round($chickenCount/$totalfood*100,1);
$beefPerc=round($BeefCount/$totalfood*100,1);
$otherPerc=round($OtherCount/$totalfood*100,1);
}
?>