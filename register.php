<?php session_start(); unset($_SESSION['user_name'])?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>USER REGISTER</title>
	<style type="text/css">
		.background {
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg1.jpg);
			background-size: cover;
			background-repeat: no-repeat; 
			height: 100vh;
			width: 100vw;
		}
	</style>
</head>
<body>
	
<div class="background">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-5 mt-3">
				<div class="card">
					<div class="card-header font-weight-bold h3 text-success text-center">Register Here</div>
					<div class="card-body">
						<div class="text-danger mb-1">
							<?php
								echo @$_GET['filled'];
							?>	
							</div>
						<form class="form-group" action="process.php" method="POST" >
							<div class="form-group">
								<label class="text-muted">User Name</label>
								<input class="form-control form-control-sm" type="text" name="uname">
							</div>
							<div class="form-group">
								<label class="text-muted">Email</label>
								<input class="form-control form-control-sm" type="email" name="uemail">
							</div>
							<div class="form-group">
								<label class="text-muted">Password</label>
								<input class="form-control form-control-sm" type="password" name="upassword_1">
							</div>
							<div class="text-danger mb-1">
							<?php
								echo @$_GET['match'];
							?>	
							</div>
							<div class="form-group">
								<label class="text-muted">Confirm Password</label>
								<input class="form-control form-control-sm" type="password" name="upassword_2">
							</div>
							<button class="btn btn-sm mt-4 btn-success btn-block" type="submit" name="register">Register</button>
							<div class="form-group">
							<a href="login.php?message=Please login to your account" class="btn btn-sm mt-4 btn-info btn-block">Log In</a>
							<label class="text-primary">Already have an Account..?</label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>