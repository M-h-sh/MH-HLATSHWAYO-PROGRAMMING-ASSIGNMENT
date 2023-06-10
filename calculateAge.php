<?php

// calculation the oldest or maximin
$query2 = "SELECT MAX(age) AS highest_age FROM survey";
$result3 = mysqli_query($connect, $query2);

// Fetch the result
$row = mysqli_fetch_assoc($result3);
$highestAge = $row['highest_age'];


// Execute the query to retrieve the person with the highest age
$query6 = "SELECT first_name FROM survey WHERE age = (SELECT MAX(age) FROM survey)";
$result7 = mysqli_query($connect, $query6);
// Check if a row is returned
if ($result7 && mysqli_num_rows($result7) > 0) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result7);
    // oldest person
    $personName = $row['first_name'];
} 

//lowest age
$query8 = "SELECT first_name FROM survey WHERE age = (SELECT Min(age) FROM survey)";
$result8 = mysqli_query($connect, $query8);

// Check if a row is returned
if ($result8 && mysqli_num_rows($result8) > 0) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result8);
    // youngest person
    $personName2= $row['first_name'];
} 
$query3 = "SELECT MIN(age) AS lowest_age FROM survey";
$result9 = mysqli_query($connect, $query3);
// Fetch the result
$rowAge = mysqli_fetch_assoc($result9);
$lowestAge = $rowAge['lowest_age']; 



//average age      
$query4 = "SELECT age FROM survey";
$result5 = mysqli_query($connect, $query4);
// Initialize variables for sum and count
$totalAges = 0;
$numberOfAges = 0;
// Calculate the sum and count of ages
while ($row = mysqli_fetch_assoc($result5)) {
    $totalAges += $row['age'];
    $numberOfAges++;
}
// Calculate the average age
$query11 = "SELECT * FROM survey ";
$averageAge =round( ($numberOfAges > 0) ? $totalAges / $numberOfAges : 0);
        
$results = mysqli_query($connect, $query11);

if($results){
    
    $register = mysqli_fetch_all($results);  
}
?>