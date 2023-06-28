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
				$selecteddetails=mysql_fetch_array(mysql_query("SELECT * FROM frscontacts WHERE contnum='$receivedid'"));
				$contnum=$selecteddetails['contnum'];
				$facility=$selecteddetails['facility'];
				$datetested=$selecteddetails['datetested'];
				$gender=$selecteddetails['gender'];
				$age=$selecteddetails['age'];
				$hivstatus=$selecteddetails['testresult'];
											    
				if(isset($_POST['editeddetails'])){
				$contnum=$_POST['contnum'];
				$facility=$_POST['facility'];
				$datetested=$_POST['datetested'];
				$gender=$_POST['gender'];
				$age=$_POST['age'];
				$hivstatus=$_POST['testresult'];
				
								
				$update=mysql_query("UPDATE frscontacts SET facility='$facility',contnum='$contnum', datetested='$datetested',
				gender='$gender',age='$age',testresult='$hivstatus' WHERE contnum='$contnum'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=frscontactreport.php?updatedinfo=udateDone\">";
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
  	  <label>Facility Name</label>
  	  <input type ="text" name= "facility" value="<?php echo $facility; ?>">
  	</div>
  	<div class="input-group">
  	<label>HTS contact Number</label>
  	  <input type="tex" name="contnum" value="<?php echo $contnum; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Date Identified</label>
  	  <input type="date" name="datetested" value="<?php echo $datetested; ?>">
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
  	  <label>HIV test Result</label>
  	  <input type="text" name="testresult" value="<?php echo $hivstatus; ?>">
  	</div>
	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
</html>					