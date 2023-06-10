<?php
include "connection.php";

//eat out average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE eat_out='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageEatOut=round($totalEatOut/$checkAverage*5,1);
if($averageEatOut>=1)
{
    $eatOutrating="Strongly agree(1)";
}
if($averageEatOut>=2)
{
    $eatOutrating="Agree(1)";
}
if($averageEatOut>=3)
{
    $eatOutrating="Neutral(3)";
}
if($averageEatOut>=4)
{
    $eatOutrating="Disagree(4)";
}
if($averageEatOut>=5)
{
    $eatOutrating="Strongly disagree(5)";
}

//movies average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE movies='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageMovie=round($totalEatOut/$checkAverage*5,1);
if($averageMovie>=1)
{
    $movierating="Strongly agree(1)";
}
if($averageMovie>=2)
{
    $movierating="Agree(1)";
}
if($averageMovie>=3)
{
    $movierating="Neutral(3)";
}
if($averageMovie>=4)
{
    $movierating="Disagree(4)";
}
if($averageMovie>=5)
{
    $movierating="Strongly disagree(5)";
}

//watch tv average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE tv='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageTV=round($totalEatOut/$checkAverage*5,1);
if($averageTV>=1)
{
    $tvrating="Strongly agree(1)";
}
if($averageTV>=2)
{
    $tvrating="Agree(1)";
}
if($averageTV>=3)
{
    $tvrating="Neutral(3)";
}
if($averageTV>=4)
{
    $tvrating="Disagree(4)";
}
if($averageTV>=5)
{
    $tvrating="Strongly disagree(5)";
}

//watch tv average rating
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Strongly agree(1)'");

if($results){
$strongAgree = mysqli_num_rows($results);
$strongA=$strongAgree+1;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Agree(2)'");

if($results){
$addValue=mysqli_num_rows($results);
$agree = $addValue*2;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Neutral(3)'");

if($results){
$addValue=mysqli_num_rows($results);
$neutral = $addValue*3;
}
$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Disagree(4)'");

if($results){
$addValue=mysqli_num_rows($results);
$disagree = $addValue*4;
}

$results = mysqli_query($connect, "SELECT * FROM survey WHERE radio='Strongly disagree(5)'");
if($results){
$addValue=mysqli_num_rows($results);
$stringDisagree = $addValue*5;
}
$checkAverage=$all*5;
$totalEatOut=$strongA+$agree+$neutral+$disagree+$stringDisagree;
$averageRadio=round($totalEatOut/$checkAverage*5,1);
if($averageRadio>=1)
{
    $radiorating="Strongly agree(1)";
}
if($averageRadio>=2)
{
    $radiorating="Agree(1)";
}
if($averageRadio>=3)
{
    $radiorating="Neutral(3)";
}
if($averageRadio>=4)
{
    $radiorating="Disagree(4)";
}
if($averageRadio>=5)
{
    $radiorating="Strongly disagree(5)";
}

?>
