
<html>  
<head>
	<t
       itle>  BMI CALCULATOR  </title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<h1 style="font-family:Arial; font-size:50px; color:White">
		
		Take care of your body.It's the only place you have to live.
	</h1>

</head>
<body background="food-1932466_1280.jpg">  
<form method="post">  
Enter Weight:  
<input type="number" name="number1" placeholder="Kg" value="<?php if (isset($_POST['submit'])) { echo $_POST['number1']; }  ?>"/><br><br>  
Enter Height:  
<input type="number" name="number2" placeholder="cms" value="<?php if (isset($_POST['submit'])) { echo $_POST['number2']; }  ?>"/><br><br>  
<input  type="submit" class="button form-control" name="submit" value="GET BMI">  
</form>  
<?php  
    
    
    session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregitration');
   
    
    
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1']; 
         
        $number2 = $_POST['number2'];
        
        $number3= ($number2*$number2)/10000;
        
        $bmi =  $number1/$number3;
             
echo "BMI is: ".$bmi;
        
        
         $s = "select * from heightweight1 where bmi = '$bmi' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

 
    $reg=" INSERT INTO heightweight1(height , weight , bmi) values ('$number1' , '$number2', '$bmi')";
    mysqli_query($con, $reg);
            

if ($bmi>0 && $bmi<18) {
   header('Location: underweight.php');
   }   
else if ($bmi>=18 && $bmi<25) {
   	header('Location: healthy.php');
   } 
else if ($bmi>=25 && $bmi<40) {
   	header('Location: overweight.php');
   }
else {
    header('Location: obesity.php');
   }                   
}  

    
    ?>
    </body>
</html>
