<?php
include '../connection.php';
if(isset($_POST['sub'])){
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $mb = $_POST['mobile'];
  
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    mysqli_query($conn,"insert into login_tb(user_name,password,type )values('$user','$pass','volunteer')");
    $log = mysqli_insert_id($conn);
    mysqli_query($conn,"insert into volunteers(login_id,name,email,mobile)values('$log','$nm','$em','$mb')");

    header("location:login.php");
    
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="stylelog/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stylelog/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stylelog/css/util.css">
	<link rel="stylesheet" type="text/css" href="stylelog/css/main.css">
<!--===============================================================================================-->
</head>
<body >
	
	<div class="limiter">

		<div class="container-login100">
                
			<div class="wrap-login100">

                
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="name"></span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="mobile">
						<span class="focus-input100" data-placeholder="phone number"></span>
					</div>
                   
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="sub"class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

                 
					<div class="text-center p-t-115">
						<p><a href="../home.php">Back to Home</a></p>
						
						
					</div>
					<div align="center">
					<a  class="txt2" href="forgotpassword.php">
							Forgotten password?
						</a>
						</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="stylelog/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/bootstrap/js/popper.js"></script>
	<script src="stylelog/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/daterangepicker/moment.min.js"></script>
	<script src="stylelog/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="stylelog/js/main.js"></script>

</body>
</html>