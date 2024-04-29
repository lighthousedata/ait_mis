<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
<?php //include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Contact client register</h2>
	<h3 style="color:#000000";><i>(Reached contacts only)</i></h3>
	<?php include('server.php') ?>
	<?php
	$currentyear=date('D/d/m/Y');
	$today=date('d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
  <?php
  if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
   $datetested = $_POST['datetested'];
  $date_explode = explode ('-',$datetested);
				$day = $date_explode[2];
				$month = $date_explode[1];
				$year = $date_explode[0];
				
				$today_explode = explode ('/',$today);
				$tday = $today_explode[0];
				$tmonth = $today_explode[1];
				$tyear = $today_explode[2];
				
				$datetested_new = $year.$month.$day;
				$tdate = $tyear.$tmonth.$tday;
								
				if ($datetested_new > $tdate){
					echo "you can not have future dates like "." " .$datetested_new ." " ."today is". " ". $tdate;
				}
  				else {
  
  
$facility = $_POST['facility'];
$contnum = $_POST['contnum'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$datetested = $_POST['datetested'];
$testresult = $_POST['testresult'];
//Insert Query of SQL
$insertdetails = mysql_query("insert into frscontacts(facility,contnum,gender,age, datetested, testresult) 
							values ('$facility','$contnum', '$gender','$age','$datetested', '$testresult')");
	
	if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysql_error();
				 }	
  }			
  }  
?>

  <form method="post" action="frscontacts.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Facility Name</label>
  	  <select name="facility" style="float:left; height:40px" required = "Yes"><option>
														<?php
									$selectfacilities=mysql_query("SELECT * FROM facilities");
				while($facility=mysql_fetch_array($selectfacilities)){
				
				echo "<option>".$facility['FacName']."</option>";
				}
			?></option></select>  
  	</div><br><br>
  	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="contnum" required="yes" placeholder =" contact number">
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	   <select name="gender" style="float:left; height:40px" required = "Yes"><option>
														<?php
									$selectsex=mysql_query("SELECT * FROM gender");
				while($gender=mysql_fetch_array($selectsex)){
				
				echo "<option>".$gender['gender']."</option>";
				}
			?></option></select>  
  	</div><br><br>
	<div class="input-group">
  	  <label>Age</label>
	  
  	 <input name="age"
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "2" min = "0"
 />
  	</div>
  	<div class="input-group">
  	  <label>Date tested</label>
  	  <input type="date" name="datetested" required="yes"; ?>
  	</div>
  	<div class="input-group">
  	  <label>Test Result</label>
  	  <select name="testresult" style="float:left; height:40px" required = "Yes"><option>
														<?php
				$selectresults=mysql_query("SELECT * FROM hivtestresult");
				while($testresult=mysql_fetch_array($selectresults)){
				
				echo "<option>".$testresult['catname']."</option>";
				}
			?></option></select>  
  	</div><br><br>
  	</div>
  	
  	<div class="input-group">
	<input type ="reset" class ="btn"value="Clear" style= "width: 60px; background-color: purple"=>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <button type="submit" class="btn" name="submit">Finish</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  	<p>
  	<input type="button" class="btn"value="Previous" style = "background-color: grey" onClick="history.go(-1);">
  	</p>
  </form>
</body>
</html>