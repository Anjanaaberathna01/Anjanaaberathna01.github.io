<?php
session_start();
?>
<?php
require('dbcon.php');

$fist_name="";
$last_name="";
$p_number="";
$email="";
$upassword="";

if(isset($_POST['register']))
{
$fist_name=$_POST["fist_name"];
$last_name=$_POST["last_name"];
$p_number=$_POST["p_number"];	
$email=$_POST["email"];
$upassword=$_POST["upassword"];
}


$sql ="INSERT INTO client(F_Name, L_Name, Email, Contact ,upassword) VALUE ('$fist_name', '$last_name', '$email' , '$p_number', '$upassword')";


if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();

   header('location:index.html');
?>