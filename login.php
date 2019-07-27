<?php session_start(); unset($_SESSION['user_name']);?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>LOG IN</title>
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
			<div class="col-5 mt-5">
				<div class="card">
					<div class="card-header font-weight-bold h3 text-info text-center">Register Here</div>
					<div class="card-body">
						<div class="text-primary font-weight-light mb-1"><?php echo @$_GET['message'];?></div>
						<div class="text-danger font-weight-light mb-1"><?php echo @$_GET['filled']; ?></div>
						<form class="form-group" action="process.php" method="POST" >
							<div class="form-group">
								<label class="text-muted">User Name</label>
								<input class="form-control form-control-sm" type="text" name="uname">
							</div>
							<div class="form-group">
								<label class="text-muted">Password</label>
								<input class="form-control form-control-sm" type="password" name="upassword">
							</div>
							<button class="btn btn-sm mt-4 btn-info btn-block" type="submit" name="login">Log In</button>
							<div class="form-group">
							<a href="index.php" class="btn btn-sm mt-4 btn-success btn-block">Register Here</a>
							<label class="text-success">Don't have an Account..?</label>
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