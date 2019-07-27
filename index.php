<?php
	session_start();
	if (!$_SESSION['user_name']){
		header('Location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>WELCOME PAGE</title>
<style>
	
.page_background {
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/bg.jpg);
	background-size: cover;
	background-repeat: no-repeat; 
	height: 100vh;
	width: 100vw;
}

h1 {
	text-align: center;
	letter-spacing: 0;
	font-size: 60px !important;
	transition: letter-spacing 0.6s ease-in-out , font-size 0.6s ease-in;
}


</style>

</head>
<body>


<div class="page_background">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h1 class="display-4 mt-5 text-center text-light font-weight-lighter">Explore Our Design...</h1>
				<h6 class="display-4 mt-5 text-center text-light font-weight-lighter"><?php echo @$_GET['message']; ?></h6>
			</div>
			<div class="col-8">
				
				
			</div>
			<div class="col-4">
				<a href="process.php?logout=true" class="btn btn-outline-warning btn-lg">Logout</a>
			</div>
		</div>
	</div>
</div>
	


<script type="text/javascript">
	document.addEventListener('DOMContentLoaded' , ()=>{
		document.querySelector('h1').style.cssText = "letter-spacing:3px; font-size:65px !important; margin-top:10px;";
	});
</script>


</body>
</html>