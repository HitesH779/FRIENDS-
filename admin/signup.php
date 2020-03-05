<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" type="text/css" href=" style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 0;
}
</style>
    

</head>
<body>
	<style>
	body
	{
		background-image: url('health.jpg');
	}
</style>

	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login here</h2>
			<form action="validate2.php" method="post">
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
					<input type="text" name="user" class="form-control" placeholder="Username" required>
				</div>
	               <div class="input-container">
                       <i class="fa fa-key icon"></i>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
                       </div>
					<button class="btn">Login</button>
			</form>
			<form action="sign2.php" method="post">
				<label>New user !! Create an account</label>
				<button class="btn">Signup</button>
			</form>
		</div>
		</div>

</div>

</body>	

</html>