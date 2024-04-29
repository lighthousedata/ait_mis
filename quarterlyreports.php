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
	<h2>AIT Reports and List of clients to view</h2>
	
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
    	
		<center>
	<span class="fa fa-money"> </span> <a style="text-decoration:none" href="facilitysummaries.php" class="btn" >AIT Cascade</a><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="offered.php" class="btn" >Clients offerred AIT</a><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="accepted.php" class="btn" >Clients Accepted AIT</a><br>
	<!--<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="ElicitedContacts.php" class="btn" >Elicited Contacts age and Sex</a><br>-->
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="negativecontacts.php" class="btn" >New Neg Age and Sex Disag</a><br>	
	 <br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="recentnegative.php" class="btn" >Recent Negative Age  and Sex Disag</a><br>	
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="positivecontacts.php" class="btn" >New Pos Age and Sex Disag</a><br>	
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="previouseposcontacts.php" class="btn" >Previous positives contacts Age and Sex Disag</a><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="eligiblecontacts.php" class="btn" >Eligible Contacts Age and Sex Disag</a><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="reachedcontacts.php" class="btn" >Reached contacts Age and Sex Disag</a><br>
	<br><br> <button><h2>Lisit of clients </h2></button><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="indexclientslist.php" class="btn" >List of Index clients</a><br>
	<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="eligiblecontactslist.php" class="btn" >List of Eligible Contacts</a><br>
		<br><span class="fa fa-money"> </span> <a style="text-decoration:none" href="reachedcontactslist.php" class="btn" >List of reached contacts</a>
	
    	<br><p> 
    <?php endif ?>
	<tr><td><br><br>
<!--<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p> -->
<br></td><td></td><td></td><td><p><a href = "index.php"class="btn" style="background-color: red">Cancel </a></p>
<!--<br> <div class="panel-footer text-center">&copy; 2020. All Rights Reserved</div>-->
	</div>
</ul>		
</body>
</html>