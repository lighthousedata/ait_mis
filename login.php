<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	<center>
  	<div class="input-group">
 <br> <button type="submit" class="btn" name="login_user">Login</button>
 
 </div>
  	<p>
  		Not registered? <a href="register.php">Sign up</> 
  	</p>
  	</div></center>
  </form>
</body>
</html>