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

  	<h2>Disagrehgated Items in AIT data</h2>
	<?php
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>

	
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
		<h2>Age disagregation for clients offered AIT</h2>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	
    	
		<ul style="list-style: none" class="list-group">

	&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a href="offeredagegrp.php" style="color:black">Index clients offered AIT</a>
	<br>&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a href="acceptedagegrp.php" style="color:black">Index clients accepted AIT </a></li>
	<br><li><span class="fa fa-money"> </span> <a href="elicitedagegrp.php"style="color:black">Elicited Contacts by age</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="posfrsbyagegrp.php"style="color:black">Age group tested Positive(FRS)</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="negfrsbyagegrp.php"style="color:black">Age group tested Negative(FRS)</a></li>
    <br><li><span class="fa fa-money"> </span> <a href="negcontacts.php"style="color:black">Contacts tested HIV Negative</a></li>	
	<br><li><span class="fa fa-money"> </span> <a href="poscontacts.php"style="color:black">Contacts tested HIV New Positive</a></li>	
	<br><li><span class="fa fa-money"> </span> <a href="confcontacts.php"style="color:black">Confirmatory Positive Contacts</a></li>
	
	<br><br><p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>
	
	<br><p><a href = "managecontacts.php"class="btn" style="background-color: red">Cancel </a></p>
	
    <br><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

 <div class="panel-footer text-center">&copy; 2020. All Rights Reserved</div>
	</div>
</ul>		
</body>
</html>