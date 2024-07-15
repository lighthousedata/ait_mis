<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
<?php //include("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
<!--<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>-->
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
  	<h2>Index client register</h2>
	<h3 style="color:#000000";><i>(Index details)</i></h3>
 
	<?php include('server.php') ?>
<?php //include("includes/functions.php"); ?>
<?php //include("includes/header.php"); 


?>
 		<?php
				$currentyear=date('d-m-Y');
				$today=date('d/m/Y');
				$currentdate =date('D');
				echo"<font size='+1'>$currentyear</font>";
				// $username=mysql_query("SELECT username from users where password(?)");
				// echo "<fontsize='+1'>$username</font>";
				
				?>
 </div>
		<?php
				if(isset($_POST['register'])){
				$dateidentified = $_POST['dateidentified'];	
				
				$date_explode = explode ('-',$dateidentified);
				$day = $date_explode[2];
				$month = $date_explode[1];
				$year = $date_explode[0];
				
				$today_explode = explode ('/',$today);
				$tday = $today_explode[0];
				$tmonth = $today_explode[1];
				$tyear = $today_explode[2];
				
				$dateidentified_new = $year.$month.$day;
				$tdate = $tyear.$tmonth.$tday;
								
				if ($dateidentified_new > $tdate){
					echo "you can not have future dates"." " .$dateidentified_new ." " ."today is". " ". $tdate;
				}
				else {
                $indexnumber = $_POST['indexnum'];	
				$facility = $_POST['facility'];	
				$dateidentified;
				$arthtsno = $_POST['arthtsno'];
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$category = $_POST['category'];
				$referralsource = $_POST['source'];
				$consent = $_POST['consent'];
						
				
				$insertdetails =mysqli_query($db,"INSERT INTO indexreg(facility,indexnum,dateidentified,arthtsno,gender,age,category,source,
												consent) 
									values('$facility','$indexnumber','$dateidentified','$arthtsno','$gender','$age','$category',
											'$referralsource','$consent')");
							
					if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysqli_error($db);
				 }
				}
				}
							?>
							<center>
                 <form method="post" action="indexclient.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Facility Name</label>
  	  <select name="facility" style="float:left; height:40px" required ="YES"><option>
														<?php
									$selectfacilities=mysqli_query($db, "SELECT * FROM facilities");
				while($facility=mysqli_fetch_array($selectfacilities)){
				
				echo "<option>".$facility['FacName']."</option>";
				}
			?> </option></select>  
  	</div><br><br>
  	<div class="input-group">
  	  <label>Index Number</label>
  	  <input type="text" name="indexnum" required="yes" placeholder ="Index ID">
  	</div>
  	<div class="input-group">
	
  	  <label>Date Identified</label>
  	  <input type="date" name="dateidentified" id ="txtdate" required="yes" >
  	</div>
  	<div class="input-group">
  	  <label>HTS or ART Number</label>
  	  <input type="text" name="arthtsno" required="yes" placeholder ="art or hts number">
  	</div>
  	<div class="input-group">
  	  <label>Gender</label>
  	 <select name="gender" style="float:left; height:40px" required "YES"><option>
														<?php
									$selectsex=mysqli_query($db,"SELECT * FROM gender");
				while($gender=mysqli_fetch_array($selectsex)){
				
				echo "<option>".$gender['gender']."</option>";
				}
			?> </option></select>  
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
  	  <label>Index category</label>
  	  <select name="category" style="float:left; height:40px" required><option>
														<?php
				$selectcategories=mysqli_query($db,"SELECT * FROM indexcategories");
				while($category=mysqli_fetch_array($selectcategories)){
				
				echo "<option>".$category['catname']."</option>";
				}
			?></option></select>  
  	</div><br><br>
	<div class="input-group">
  	  <label>Entry Point</label>
  	  <select name="source" style="float:left; height:40px" required><option>
														<?php
				$selectsouce=mysqli_query($db,"SELECT * FROM entrypoints");
				while($referralsource=mysqli_fetch_array($selectsouce)){
				
				echo "<option>".$referralsource['sourceid']."</option>";
				}
			?> </option></select>  
  <br><br>

  	  <label>Did Index consent?</label>
  	  <select name="consent" style="float:left; height:40px" required><option>
														<?php
									$selectconsent=mysqli_query($db,"SELECT * FROM consent");
				while($consent=mysqli_fetch_array($selectconsent)){
				
				echo "<option>".$consent['name']."</option>";
				}
			?> </option></select>  

	  	<div/>
		<br><br>
  	<div class="input-group">
	<input type ="reset" class ="btn"value="Clear" style= "width: 60px; background-color: purple"=>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <button type="submit" class="btn" name="register">Finish</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  	<p>
  	 <a href="indexcontacts.php">Add Contacts to index</a>
  	</p>
  </form>
</body>
</html>						 <?php
						 if(isset($_POST['savedetails']))
						 {
				$indexnumber = $_POST['indexnum'];	
				$facility = $_POST['facility'];
				$dateidentified = $_POST['dateidentified'];
				$arthtsno = $_POST['arthtsno'];
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$category = $_POST['category'];
				$hivstatus = $_POST['hivstatus'];
				$source = $_POST['source'];
				$consent = $_POST['consent'];							
						 }
						?>
