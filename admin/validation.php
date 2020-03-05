<?php

session_start();
header('location:signup.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregitration');

$name1 = $_POST["name1"];
$age = $_POST["age"];
$name = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["Password"];

$s = " select  * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num =  mysqli_num_rows($result);

if ($num == 1)
{
	echo "Username already taken";

}
else
{
	$reg = "insert into usertable(name , age, username, email , password) values ('$name1' , '$age' , '$name' , '$email' , '$pass')";
	mysqli_query($con, $reg);
	echo 'Registration Succesfull';
}
?>