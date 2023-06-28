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
	<h2> Quarterly report templates</h2>
	
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >

      	<h4>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h4>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	  	
	<ul style="list-style: none" class="list-group">
	<b>
	<li><span class="fa fa-money"> </span> <a href="facilitysummariesq2_23.php"style="color:black">AIT Cascade</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="indexreportq2_23.php"style="color:black">List of Index clients</a></li>
	&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a href="offeredagegrpq2_23.php" style="color:black">Index clients offerred AIT</a>
	<br>&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a href="acceptedagegrpq2_23.php" style="color:black">Index clients Accepted AIT</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="elicitedagegrpq2_23.php"style="color:black">Elicited Contacts age group </a></li>
	<!--<br><li><span class="fa fa-money"> </span> <a href="posfrsbyagegrpq2_23.php"style="color:black">Age group tested Positive(FRS)</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="negfrsbyagegrpq2_23.php"style="color:black">Age group tested Negative(FRS)</a></li>-->
    <br><li><span class="fa fa-money"> </span> <a href="negcontactsq2_23.php"style="color:black">Negative Contacts Age groups</a></li>	
	 <br><li><span class="fa fa-money"> </span> <a href="RecentNegativeq2_23.php"style="color:black">Recent Negative Contacts</a></li>	
	<br><li><span class="fa fa-money"> </span> <a href="poscontactsq2_23.php"style="color:black">Positive Contacts Age groups</a></li>	
	<br><li><span class="fa fa-money"> </span> <a href="confcontactsq2_23.php"style="color:black">Previous positives contacts</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="contactreportq2_23.php"style="color:black">Eligible contacts list</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="contactsagegrpq2_23.php"style="color:black">Contacts age group</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="contactoutcomesq2_23.php"style="color:black">List of reached contacts</a></li>
	<br><li><span class="fa fa-money"> </span> <a href="frscontactreport.php"style="color:black">FRS clients Tested</a></li>
	
    	<br><p> 
    <?php endif ?>
	<tr><td><br><br>
<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-2);">
</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td></td><a href = "index.php"class="btn" style="background-color: red">Cancel </a></p>
<br> <div class="panel-footer text-center">&copy; 2020. All Rights Reserved</div>
	</div>
</ul>		
</body>
</html>