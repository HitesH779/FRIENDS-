<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregitration');
     $name = $_POST['user'];
     $pass = $_POST['password'];
     $s = "select * from usertable1 where username = '$name' && password = '$pass' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:home2.php');
    }
else{
    
    header('location:signup.php');
}
    ?>
<html>
<body>
    
    
    </body>

</html>