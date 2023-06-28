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
<body>
<div class="header">
    <h2>Index client details</h2>
    <?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
  

	?>
	</head>
  </div>
				<?php
				$receivedid=$_GET['editclientid'];
				$selecteddetails=mysql_fetch_array(mysql_query("SELECT * FROM indexcontacts WHERE indexnum ='$receivedid'"));
				$indexnum=$selecteddetails['indexnum'];
				$consent=$selecteddetails['consent'];
				$contcate=$selecteddetails['contcate'];
				$gender=$selecteddetails['gender'];
				$age=$selecteddetails['age'];
				$hivstatus=$selecteddetails['hivstatus'];
				$outcome=$selecteddetails['finoutcome'];
											    
				if(isset($_POST['editeddetails'])){
				$indexnum=$_POST['indexnum'];
				$consent=$_POST['consent'];
				$contcate=$_POST['contcate'];
				$gender=$_POST['gender'];
				$age=$_POST['age'];
				$hivstatus=$_POST['hivstatus'];
				$outcome=$_POST['finoutcome'];
				
								
				$update=mysql_query("UPDATE indexcontacts SET indexnum='$indexnum',consent='$consent', contcate='$contcate',
				gender='$gender',age='$age',hivstatus='$hivstatus', finoutcome='$outcome' WHERE indexnum='$indexnum'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=elicitedContacts.php?updatedinfo=udateDone\">";
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
  	<label>Index Number</label>
  	  <input type="tex" name="indexnum" value="<?php echo $indexnum; ?>">
  	</div>
  	<div class="input-group">
  	  <label>consent</label>
  	  <input type="tex" name="consent" value="<?php echo $consent; ?>">
  	</div>
	<div class="input-group">
  	  <label>Category</label>
  	  <input type="text" name="contcate" value="<?php echo $contcate; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Gender</label>
  	  <input type="text" name="gender" value="<?php echo $gender; ?>">
  	</div>
	<div class="input-group">
  	  <label>Age</label>
  	  <input type="number" name="age" value="<?php echo $age; ?>">
  	</div>
	<div class="input-group">
  	  <label>HIV status</label>
  	  <input type="text" name="hivstatus" value="<?php echo $hivstatus; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Final Outcome</label>
  	  <input type="text" name="finoutcome" value="<?php echo $outcome; ?>">
  	</div>
	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
</html>					