<?php
session_start();
?>
<html>
<head>
    <title>
    Homepage
        <link rel="stylesheet" type="text/css" href=" style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    
    </title>
    
    </head>
    <body>
        <style>
        body
            {
                background-image: url('food-1932466_1280.jpg')
            }
            .btn {
  background-color: white;
  color: black;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 0;
}
            
            
            
            
            #boxshadow {
  position: relative;
  -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  padding: 10px;
  background: white;
}

/* Make the image fit the box */
#boxshadow img {
  width: 100%;
  border: 1px solid #8a4419;
  border-style: inset;
}

#boxshadow::after {
  content: '';
  position: absolute;
  z-index: -1; /* hide shadow behind image */
  -webkit-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
  box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);        
  width: 70%; 
  left: 15%; /* one half of the remaining 30% */
  height: 100px;
  bottom: 0;
}
            
            
            
            
            
            
            .button {
  background-color: white; /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
            
            
            
        </style>
        
        <div class="container">
        
            
            <form action="logut.php" method="post">
                
        <div>
                <button  class="button button4" align="left">logout</button>    
        </div>
        
        </form>
            
            
            
    
        <h1 style="color:white">welcome <?php echo $_SESSION['username']; ?> </h1>
        </div>
        <form action="bmi.php" method="post">
        <div>
                <button class="button button4">Calculate BMI</button>    
        </div>
        
        </form>
    </body>

</html>