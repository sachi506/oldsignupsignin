<?php
session_start();

$connection=mysqli_connect('sql204.epizy.com','epiz_28888709','WImEezI0Rc8ioz');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'epiz_28888709_startingpage');
$Fname=$_POST['Fname'];
$email=$_POST['email'];
$password=$_POST['password'];

$select="select * from login where email='$email' && password='$password' && Fname='$Fname'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['Fname']=$Fname;
    header('location:app.php');
}
else
{
    header('location:signin.php');
}
?>