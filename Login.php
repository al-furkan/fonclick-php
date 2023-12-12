<?php
session_start();
include("db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fonclick login</title>
  <link rel="stylesheet" href="./css/login.css">
	
</head>
<body>

  <h2>FonClick</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="login.php" method="post" enctype="multipart/form-data">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name"  name="name" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="text" placeholder="Phone"name="phone"  required/>
			<input type="password" placeholder="Password" name="password"  required />
			<input type="text" placeholder="Address" name="address" required/>
			<button type="submit" class="btn btn-outline-primary" name="btn">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="post" enctype="multipart/form-data">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email"  required/>
			<input type="password" placeholder="Password" name="password" required />
			<a href="#">Forgot your password?</a>
			<button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://fonclick.com">@furkan</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
  <script src="./js/login.js"></script>
</body>
</html>




<?php
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];

		
    $added  = mysqli_query($con,"INSERT INTO user_info(namea, email, pass, mobile, address1) VALUES ('$name','$email','$password','$phone',' $address')") or die ("query incorrect");

if($added){
  echo "<script>alert('Work post Complite!')</script>";
  echo "<script>window.open('./index.php?logged_in=you have successfuly login','_self')</script>";
}

else{
  echo "<script>alert('Your register incomplited!')</script>";
  echo "<script>window.open('login.php?view_work','_self')</script>";
}
mysqli_close($con);
}

?>



<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass =$_POST['password'];
    
    $sel_user ="SELECT * FROM user_info WHERE  email='$email' AND pass='$pass'";
    $run_user=mysqli_query($con,$sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==0){
    echo " <script>alert('password or email is worng, please try again')</script>";
    }
    else{
        $_SESSION['email']=$email;
        echo "<script>window.open('./index.php?logged_in=you have successfuly login','_self')</script>";
    }
   
}
?>