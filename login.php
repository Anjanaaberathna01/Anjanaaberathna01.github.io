<?php
session_start();
?>
<?php

$Email="";
$upassword="";


if(isset($_POST['Email']))
{
	$Email=$_POST['Email'];
}

if(isset($_POST['upassword']))
{
	$upassword=$_POST['upassword'];
}


$_SESSION['Email']=$Email;
$_SESSION['upassword']=$upassword;
$_SESSION['status']=0;
$_SESSION['logintime']=time();

require('dbcon.php');   

$sql="SELECT * FROM client WHERE Email='$Email'";

$result = $conn->query($sql);
$row=$result->fetch_assoc();


//echo $Email."<br>".$Password;


if($_SESSION['Email']==$row['Email']&&$_SESSION['upassword']==$row['upassword'])
{
	$_SESSION['status']=1;
	header('location:home.php');
}
else
{
	header('location:index.html');
}

?>