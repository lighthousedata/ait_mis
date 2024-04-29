<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
 <?php //include('errors.php'); ?>
<?php //include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>VAPN Contacts reached</h2>
	<h3 style="color:#000000";><i>VAPN Contacts Tested and Documented</i></h3>
	<?php include('server.php') ?>
	<?php
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
  <?php
  if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$facility = $_POST['facility'];
$contactno = $_POST['contactno'];
$age = $_POST['age'];
$gender = $_POST['gender'];
if ($gender <> 'FEMALE' OR $gender <> 'MALE'){
	echo"<font color ='red' style ='text-align center'>Gender must be either Male or Female please change.</font>";
}
$htsno = $_POST['htsno'];
$datetested = $_POST['datetested'];
$testresult = $_POST['testresult'];


$insertdetails = mysql_query("insert into vapncontacts(facility, contactno,age,gender,htsno,datetested,testresult) 
						values ('$facility', '$contactno','$age', '$gender','$htsno','$datetested','$testresult')");
	
	if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysql_error();
				 }	
  }				 
?>

  <form method="post" action="vapncontacts.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Facility</label>
  	   <select name="facility" style="float:left; height:40px" required><option>Facility name</option>
														<?php
									$selectfacility=mysql_query("SELECT * FROM facilities");
				while($facility=mysql_fetch_array($selectfacility)){
				
				echo "<option>".$facility['FacName']."</option>";
				}
			?></select>  
  	</div><br><br>
	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="contactno" required="yes" placeholder="Contac number">
  	</div>
  	<div class="input-group">
  	  <label>Age</label>
  	  <input type="number" name="age" required="yes" placeholder="age of contact">
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	  <select name="gender" style="float:left; height:40px" required><option>Select gender</option>
														<?php
									$selectsex=mysql_query("SELECT * FROM gender");
				while($gender=mysql_fetch_array($selectsex)){
				
				echo "<option>".$gender['gender']."</option>";
				}
			?></select>  
  	</div><br><br>
	<div class="input-group">
  	  <label>HTS number</label>
  	  <input type="text" name="htsno" required="yes" placeholder ="htsno">
  	</div>
	<div class="input-group">
  	  <label>Date tested</label>
  	  <input type="date" name="datetested" required="yes" placeholder ="date tested">
  	</div>
  	<div class="input-group">
  	  <label>Test Result</label>
  	  <select name="testresult" style="float:left; height:40px" required><option>hiv testresult</option>
														<?php
				$selectresults=mysql_query("SELECT * FROM hivtestresult");
				while($testresult=mysql_fetch_array($selectresults)){
				
				echo "<option>".$testresult['catname']."</option>";
				}
			?></select>  
  	<br><br>
  	<div class="input-group">
	<input type ="reset" class ="btn"value="Clear" style= "width: 60px; background-color: purple"=>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <button type="submit" class="btn" name="submit">Finish</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="managecontacts.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  	<p>
   <a href="indexclient.php">New Index</a><td></td> &nbsp;&nbsp;&nbsp;&nbsp; <a href="contacts.php">Reached Contacts</a>
  	</p>
  </form>
</body>
</html>