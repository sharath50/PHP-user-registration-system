<?php session_start();  ?>
<?php include('connection.php') ?>
<?php 
	if (@$_GET['logout'] == 'true') {
		header('Location:login.php?message=Please login to your account');
	}else{
		header('Location:login.php');
	}
?>

<?php 

$user_name = '';
$user_email = '';
$user_password = '';
$reg_error_arr = [];
$log_error_arr = [];

function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if (isset($_POST['register'])) {
	if (empty($_POST['uname'])) {
		array_push($reg_error_arr , 'no user');
	} else {
		$user_name = check_input($_POST['uname']);
	}
	if (empty($_POST['uemail'])) {
		array_push($reg_error_arr , 'no email');
	} else {
		$user_email = check_input($_POST['uemail']);
	}
	if (empty($_POST['upassword_1'])) {
		array_push($reg_error_arr , 'no password');
	} else {
		$user_password = check_input($_POST['upassword_1']);
	}
	if ($_POST['upassword_1'] !== $_POST['upassword_2']) {
		array_push($reg_error_arr , 'no match');
	}


	if (in_array('no user' , $reg_error_arr)) {
		$return = 'Location:register.php?filled=All Fields Must Be Filled';
	}
	if (in_array('no match' , $reg_error_arr)){
		$return = 'Location:register.php?filled=All Fields Must Be Filled&match=Password Not Matching';
	}


	if (empty($user_name) | empty($user_email) | empty($user_password) | in_array('no match' , $reg_error_arr)){
		header($return);
	} else {
		$sql = "INSERT INTO web_users(user_name , user_email , user_pass) VALUES('{$user_name}' , '{$user_email}' , '{$user_password}');";
		$register = $connection->query($sql);
		if ($register) {
			header('Location:login.php?message=Please login to your account.');
		}
	}

}

if (isset($_POST['login'])) {
	if (empty($_POST['uname'])) {
		array_push($log_error_arr , 'no user');
	} else {
		$user_name = check_input($_POST['uname']);
	}
	if (empty($_POST['upassword'])) {
		array_push($log_error_arr , 'no password');
	} else {
		$user_password = check_input($_POST['upassword']);
	}

	if (in_array('no user' , $log_error_arr) | in_array('no password' , $log_error_arr)) {
		header('Location:login.php?filled=All fields must be filled');
	}
	else {
		$sql = "SELECT * FROM web_users WHERE user_name = '{$user_name}' AND user_pass = '{$user_password}';";
		$login = $connection->query($sql);
		while($row = $login->fetch_assoc()) {
			$user = $row['user_name'];
			$pass = $row['user_pass'];
		}
		if ($user == $user_name && $pass == $user_password){
			$_SESSION['user_name'] = $user_name;
			// $random_id = rand(100,999);
			header('Location:index.php?message=Welcome..! ' . $user_name);
		}else {
			header('Location:login.php?filled=Sorry..! username or password is incorrect...');
		}
	}
}


?>