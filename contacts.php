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
	<h4 style="color:#000000";><i>(Contacts requiring follow-up only)</i></h4>
	<?php include('server.php') ?>
	<?php
	$currentyear=date('d-m-Y');
	$today=date('d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
  <?php
  if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
  $indexinterviewdate = $_POST['indexinterviewdate'];
  $date_explode = explode ('-',$indexinterviewdate);
				$day = $date_explode[2];
				$month = $date_explode[1];
				$year = $date_explode[0];
				
				$today_explode = explode ('/',$today);
				$tday = $today_explode[0];
				$tmonth = $today_explode[1];
				$tyear = $today_explode[2];
				
				$indexinterviewdate_new = $year.$month.$day;
				$tdate = $tyear.$tmonth.$tday;
								
				if ($indexinterviewdate_new > $tdate){
					echo "you can not have future dates"." " .$indexinterviewdate_new ." " ."today is". " ". $tdate;
				}
  
  
				else {
  
$facility = $_POST['facility'];
$entrypoint = $_POST['entrypoint'];
$contnum = $_POST['contnum'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$ipvstatus = $_POST['ipvstatus'];
$mode = $_POST['mode'];

//Insert Query of SQL
$insertdetails = mysql_query("insert into contacts(facility,indexinterviewdate,entrypoint,contnum,gender,age,ipvstatus,mode) 
							values ('$facility','$indexinterviewdate', '$entrypoint','$contnum','$gender','$age','$ipvstatus','$mode')");
	
	if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysql_error();
				 }	
  }		
  }
  
?>

  <form method="post" action="contacts.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Facility Name</label>
  	  <select name="facility" style="float:left; height:40px" required = "YES"><option>
														<?php
									$selectfacilities=mysql_query("SELECT * FROM facilities");
				while($facility=mysql_fetch_array($selectfacilities)){
				
				echo "<option>".$facility['FacName']."</option>";
				}
			?></option></select>  
  	</div><br><br>
	
	<div class="input-group">
  	  <label>Index interview date</label>
  	  <input type="date" name="indexinterviewdate" value<= "$currentyear"required="yes" placeholder =" Client ID">
  	</div>
	<div class="input-group">
	<label>Entry Point</label>
  	  <select name="entrypoint" style="float:left; height:40px" required><option>
														<?php
									$selectsource=mysql_query("SELECT * FROM entrypoints");
				while($entry=mysql_fetch_array($selectsource)){
				
				echo "<option>".$entry['sourceid']."</option>";
				}
			?></option></select>  
  	</div><br><br>
  	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="contnum" required="yes" placeholder =" client ID">
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	   <select name="gender" style="float:left; height:40px" required "YES"><option>
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
  	 <!-- <input type="number" name="age" maxlength ="2"  required="yes" placeholder =" contact number"> -->
  	</div>	
  	<div class="input-group">
  	  <label>IPV Status</label>
  	  <select name="ipvstatus" style="float:left; height:40px" required "YES"><option>
														<?php
									$selectipv=mysql_query("SELECT * FROM ipvstatus");
				while($ipvstatus=mysql_fetch_array($selectipv)){
				
				echo "<option>".$ipvstatus['rname']."</option>";
				}
			?></option></select>  
  	</div><br><br>
  	<div class="input-group">
  	  <label>Notification mode</label>
  	  <select name="mode" style="float:left; height:40px" required "YES"><option>
														<?php
				$selectmodes=mysql_query("SELECT * FROM notificationmodes");
				while($mode=mysql_fetch_array($selectmodes)){
				
				echo "<option>".$mode['modename']."</option>";
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
  	 <a href="updateoutcomes.php">update outcomes</a>
  	</p>
  </form>
</body>
</html>