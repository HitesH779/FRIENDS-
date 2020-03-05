<?php

session_start();
header('location:signup.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregitration');
    $name2 = $_POST['name1'];
     $name = $_POST['user'];
    $email1 = $_POST['email'];
     $pass = $_POST['password'];
    
     $s = "select * from usertable1 where username = '$name' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "username already taken";
    }
else{
    $reg=" INSERT INTO usertable1(name , username , email , password) values ('$name2' , '$name', '$email1' , '$pass')";
    mysqli_query($con, $reg);
    echo "registration successful";
}
    ?>
