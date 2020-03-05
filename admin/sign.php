<html>
<head>
	<title>New User</title>
	<link rel="stylesheet" type="text/css" href=" style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<style>
	body
	{
		background-image: url('health.jpg');
	}
</style>

<div class="container">
	<div class="row">

<div class="col-md-6 login-right">
			<h2>Register here</h2>
			<form action="validate.php" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name1" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Age</label>
					<input type="Number" name=age class="form-control" required>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" required>
					<h1><button class="button button4">Signup</button></h1>
				</div>
				</div> 
			</form>
		</div>
		</body>