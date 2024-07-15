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
  	<h2>Index client details</h2>
	<?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysqli_query($db,"SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
				<?php
				$receivedid=$_GET['editclientid'];
				$selecteddetails=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM indexreg WHERE indexnum='$receivedid'"));
				$indexnum=$selecteddetails['indexnum'];
				$facility=$selecteddetails['facility'];
				$dateidentified=$selecteddetails['dateidentified'];
				$gender=$selecteddetails['gender'];
				$age=$selecteddetails['age'];
				$category=$selecteddetails['category'];
				$source=$selecteddetails['source'];
				$consent=$selecteddetails['consent'];
				//$eligible=$selecteddetails['eligible'];
							    
				if(isset($_POST['editeddetails'])){
				$indexnum=$_POST['indexnum'];
				$facility=$_POST['facility'];
				$dateidentified=$_POST['dateidentified'];
				$gender=$_POST['gender'];
				$age=$_POST['age'];
				$category=$_POST['category'];
				$source=$_POST['source'];
				$consent=$_POST['consent'];
				//$eligible=$_POST['eligible'];
								
				$update=mysqli_query($db,"UPDATE indexreg SET facility='$facility',indexnum='$indexnum', dateidentified='$dateidentified',
				gender='$gender',age='$age',category='$category',source='$source',  consent = '$consent' WHERE indexnum='$indexnum'");
				if($update){  echo "<meta http-equiv =\"Refresh\" content=\"1; url=indexreportq2_21.php?updatedinfo=udateDone\">";
				  }
				else{
				 echo "<p><font color='red' style='text-align:center'>Update failed</font></p>".mysqli_error($db);
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
  	<label>Index Number</label>
  	  <input type="tex" name="indexnum" value="<?php echo $indexnum; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Date Identified</label>
  	  <input type="tex" name="dateidentified" value="<?php echo $dateidentified; ?>">
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
  	  <label>Index category</label>
  	  <input type="text" name="category" value="<?php echo $category; ?>">
  	</div>
	<div class="input-group">
  	  <label>Refered From</label>
  	  <input type="text" name="source" value="<?php echo $source; ?>">
  	</div>
		<div class="input-group">
  	  <label>Consent</label>
  	  <input type="text" name="consent" value="<?php echo $consent; ?>">
  	</div>
	
	 	
  	<div class="input-group">
	  	 <button type="submit" name="editeddetails" class="btn">Save details</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  </form>
</body>
</html>					
