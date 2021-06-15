<?php
//  include "db.php";
session_start();
// header('location:loginandregister.php');

$connection=mysqli_connect('sql204.epizy.com','epiz_28888709','WImEezI0Rc8ioz');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'epiz_28888709_startingpage');

$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$select="select * from login where email='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into login(Fname,Lname,email,password) values('$Fname','$Lname','$email','$password')";
    mysqli_query($connection,$reg);
}
?>
