<?php
	session_start();

	// if login data not found 
	if(isset($_SESSION["user_not_found"]))
    {
        if($_SESSION["user_not_found"] == "yes")
        {
            $error = "User not found. Please Try again";
        	echo '<script type="text/javascript">alert("' . $error . '")</script>';
            unset($_SESSION['user_not_found']);
        }     
    }
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/index.css">

		<title>My Personal Online Book Tracker</title>
	</head>
	<body>
		<div id="full-page">
			<h1 id="heading">My Personal Book Tracker</h1>
			<div id="login-form" class="container">
				<form action="magic/login_user.php" method="POST">
					<h2>Log in</h2>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-primary">Log in</button>
				</form>
			</div>

			<div id="register-section" class="container">
				<a  id="reg-text" class="btn btn-success" href="register_user.php">New User ?? Register Now</a>
			</div>
		</div>
		
		

		<!-- Optional JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>