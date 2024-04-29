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
				$selecteddetails=mysql_fetch_array(mysql_query("SELECT * FROM vapncontacts WHERE contactno ='$receivedid'"));
				$contactno=$selecteddetails['contactno'];
				$facility=$selecteddetails['Facility'];
				$gender=$selecteddetails['gender'];
				$age=$selecteddetails['age'];
				$htsno=$selecteddetails['htsno'];
				$testresult=$selecteddetails['testresult'];
				$datetested=$selecteddetails['datetested'];
						
				
											    
				if(isset($_POST['editeddetails'])){
				$contactno=$_POST['contactno'];
				$facility=$_POST['Facility'];
				$htsno=$_POST['htsno'];
				$gender=$_POST['gender'];
				$age=$_POST['age'];
				$testresult=$_POST['testresult'];
				$datetested=$_POST['datetested'];
				
								
				$update=mysql_query("UPDATE vapncontacts SET contactno='$contactno',Facility='$facility', htsno='$htsno',
				gender='$gender',age='$age',testresult='$testresult', datetested='$datetested' WHERE contactno='$contactno'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=viewvapncontacts.php?updatedinfo=udateDone\">";
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
  	<label>Contact Number</label>
  	  <input type="tex" name="contactno" value="<?php echo $contactno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Facility</label>
  	  <input type="tex" name="Facility" value="<?php echo $facility; ?>">
  	</div>
	<div class="input-group">
  	  <label>HTS number</label>
  	  <input type="text" name="htsno" value="<?php echo $htsno; ?>">
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
  	  <label>HIV Teste Result</label>
  	  <input type="text" name="testresult" value="<?php echo $testresult; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Date tested</label>
  	  <input type="text" name="datetested" value="<?php echo $datetested; ?>">
  	</div>
	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
</html>					