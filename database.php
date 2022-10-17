<?php

function register($fname,$gender,$age, $location,$height,$weight,$birth_mk,$add_info)
{
   $conn = mysqli_connect('localhost','root','','orphan_mp') or die('unable to connect');
   $result = mysqli_query($conn,"INSERT INTO `ad_form`(`fname`, `gender`, `age`, `location`, `height`, `weight`,`birth_mk`,`add_info`) VALUES ('$fname','$gender','$age','$location','$height','$weight','$birth_mk','$add_info')");
    
   if($result)
   {
       header("location:index.php");
   
   } else{
       echo "<script> alert('Registration Unsuccessful')</script>";
   }
}


function submit($DName,$Contactno,$Email,$DAddress,$Donation,$Description)
{
   $conn = mysqli_connect('localhost','root','','orphan_mp') or die('unable to connect');
   $result = mysqli_query($conn,"INSERT INTO `donation`(`DName`,`Contactno`,`Email`,`DAddress`,`Donation`,`Description`) VALUES ('$DName','$Contactno','$Email','$DAddress','$Donation','$Description')");
    
   if($result)
   {
       header("location:index.php");
   
   } else{
       echo "<script> alert('Registration Unsuccessful')</script>";
   }
}

function send($Name,$Email,$Message)
{
   $conn = mysqli_connect('localhost','root','','orphan_mp') or die('unable to connect');
   $result = mysqli_query($conn,"INSERT INTO `contact`(`Name`,`Email`,`Message`) VALUES ('$Name','$Email','$Message')");
    
   if($result)
   {
       header("location:index.php");
   
   } else{
       echo "<script> alert('Registration Unsuccessful')</script>";
   }
}

?>
