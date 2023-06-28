<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Select period for various reports </h2>
	
	<p>You are loged in as <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >

      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
		<ul style="list-style: none" class="list-group">
	<br><li><span class="fa fa-file"> </span> <a href="quarter2_2021.php"><b>Qaurter 3 2021</a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter4_2021.php"><b>Qaurter 4 2021</a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter1_2022.php"><b>Qaurter 1 2022 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter2_2022.php"><b>Qaurter 2 2022 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter3_2022.php"><b>Qaurter 3 2022 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter4_2022.php"><b>Qaurter 4 2022 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter1_2023.php"><b>Qaurter 1 2023 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter2_2023.php"><b>Qaurter 2 2023 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter3_2023.php"><b>Qaurter 3 2023 </a></li>
	<br><li><span class="fa fa-file"> </span> <a href="quarter4_2023.php"><b>Qaurter 4 2023 </a></li>
	</li>
	
    	<br><p> 
    <?php endif ?>
	<tr><td><br><br>
<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>
<br></td><td></td><td></td><td><p><a href = "index.php"class="btn" style="background-color: red">Cancel </a></p>
<br> <div class="panel-footer text-center">&copy; 2020. All Rights Reserved</div>
	</div>
</ul>		
</body>
</html>