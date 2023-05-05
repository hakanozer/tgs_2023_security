<?php 
	include('function.php');
	//print_r(scandir(session_save_path()));
	//print_r(session_id());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<form method="post" action="" class="col-sm-5">
		<h3>User Login</h3>
		<?php if(isset($_GET["loginFail"])) { ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Error!</strong> Username or Password Fail
			<a href="./" type="button" class="btn-close" aria-label="Close"></a>
			</div>
		<?php } ?>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input name="password" type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3 form-check">
			<input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button name="user_login" type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>