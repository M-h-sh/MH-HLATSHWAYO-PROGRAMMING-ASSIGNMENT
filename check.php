<?php
include "connection.php";
$check="SELECT * FROM `survey` WHERE first_name='$Fname' AND contact_number= '$Contact'";
$queryCheck=mysqli_query($connect,$check);
$verify=mysqli_num_rows($queryCheck);
if($verify>0)
{
    $_SESSION['first_name']=$Fname;
    $_SESSION['contact_number']=$Contact;
    echo"<script> alert('This Survey Is Already Submitted!')</script>";
}
else{
$register="INSERT INTO survey(surname,first_name,contact_number,date,age,	food,eat_out,movies,tv,radio)VALUES('$Surname','$Fname','$Contact','$Date','$Age','$Food','$out','$Movie','$Tv','$Radio')";
  $result=mysqli_query($connect,$register);
  if($result)
  {
    echo"<script> alert('You have successfully registered')</script>";
    ?>
    <script>
        window.location.replace("index.php");
    </script>
<?php
  }
  else {
      echo"<script> alert('Something went wrong!')</script>";
  }

}
?>