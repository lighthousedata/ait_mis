<<<<<<< HEAD
<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
 <?php include('server.php') ?>
 <?php include('errors.php'); ?>
<?php include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Reached Contacts details</h2>
	<?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
				<?php
				$receivedid=$_GET['editclientid'];
				$selecteddetails=mysql_fetch_array(mysql_query("SELECT * FROM contactsoutcomes WHERE contnum ='$receivedid'"));
				$contnum=$selecteddetails['contnum'];
				$outcome=$selecteddetails['outcome'];
				$outcomedate=$selecteddetails['outcomedate'];
				//$gender=$selecteddetails['gender'];
				//$age=$selecteddetails['age'];
				//$hivstatus=$selecteddetails['testresult'];
											    
				if(isset($_POST['editeddetails'])){
				$contnum=$_POST['contnum'];
				$outcome=$_POST['outcome'];
				$outcomedate=$_POST['outcomedate'];
				//$gender=$_POST['gender'];
				//$age=$_POST['age'];
				//$hivstatus=$_POST['testresult'];
				
								
				$update=mysql_query("UPDATE contactsoutcomes SET outcome='$outcome',contnum='$contnum', outcomedate='$outcomedate'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=contactoutcomesq2_21.php?updatedinfo=udateDone\">";
				  }
				else{
				 echo "<p><font color='red' style='text-align:center'>Update failed</font></p>".mysql_error();
				 }
				   exit();
				 
				}
				?>
		<center>
                 <form method="post" action="">
  	
	  	<div class="input-group">
  	<label> Contact HTS Number</label>
  	  <input type="tex" name="contnum" value="<?php echo $contnum; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Outcome</label>
  	  <input type="tex" name="outcome" value="<?php echo $outcome; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Outcome date</label>
  	  <input type="date" name="outcomedate" value="<?php echo $outcomedate; ?>">
  	</div>
	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
=======
<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
 <?php include('server.php') ?>
 <?php include('errors.php'); ?>
<?php include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>FRS Contacts details</h2>
	<?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
				<?php
				$receivedid=$_GET['editclientid'];
				$selecteddetails=mysql_fetch_array(mysql_query("SELECT * FROM contactsoutcomes WHERE contnum='$receivedid'"));
				$contnum=$selecteddetails['contnum'];
				$outcome=$selecteddetails['outcome'];
				$outcomedate=$selecteddetails['outcomedate'];
				//$gender=$selecteddetails['gender'];
				//$age=$selecteddetails['age'];
				//$hivstatus=$selecteddetails['testresult'];
											    
				if(isset($_POST['editeddetails'])){
				$contnum=$_POST['contnum'];
				$outcome=$_POST['outcome'];
				$outcomedate=$_POST['outcomedate'];
				//$gender=$_POST['gender'];
				//$age=$_POST['age'];
				//$hivstatus=$_POST['testresult'];
				
								
				$update=mysql_query("UPDATE contactsoutcomes SET outcome='$outcome',contnum='$contnum', outcomedate='$outcomedate'
				WHERE contnum='$contnum'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=contactoutcomesq2_21.php?updatedinfo=udateDone\">";
				  }
				else{
				 echo "<p><font color='red' style='text-align:center'>Update failed</font></p>".mysql_error();
				 }
				   exit();
				 
				}
				?>
		<center>
                 <form method="post" action="">
  	
	  	<div class="input-group">
  	<label> Contact HTS Number</label>
  	  <input type="tex" name="contnum" value="<?php echo $contnum; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Outcome</label>
  	  <input type="tex" name="outcome" value="<?php echo $outcome; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Outcome date</label>
  	  <input type="date" name="outcomedate" value="<?php echo $outcomedate; ?>">
  	</div>
	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
>>>>>>> 71bb4425a185a1d485056861e5559d250ac39e43
</html>					