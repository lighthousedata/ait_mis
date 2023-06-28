<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
 <?php //include('errors.php'); ?>
<?php include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Index client register</h2>
	<h3 style="color:#000000";><i>Contacts' details</i></h3>
	<?php include('server.php') ?>
	<?php
	$currentyear=date('d-m-Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
  <?php
  if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$indexnum = $_POST['indexnum'];
$sexPartStatusUnk = $_POST['sexPartStatusUnk'];
$sexPartPosNoart = $_POST['sexPartPosNoart'];
$sexPartNofollowup = $_POST['sexPartNofollowup'];
$ChilStatusUnk = $_POST['ChilStatusUnk'];
$ChilPosNoart = $_POST['ChilPosNoart'];
$ChilNoFollowup = $_POST['ChilNoFollowup'];
$ParStatusUnk= $_POST['ParStatusUnk'];
$ParPosNoart= $_POST['ParPosNoart'];
$ParNofollowup= $_POST['ParNofollowup'];
$elicited = $sexPartStatusUnk + $sexPartPosNoart + $sexPartNofollowup + $ChilStatusUnk + $ChilPosNoart + $ChilNoFollowup + $ParStatusUnk + $ParPosNoart + $ParNofollowup;
$eligibles = $sexPartStatusUnk + $sexPartPosNoart + $ChilStatusUnk + $ChilPosNoart + $ParStatusUnk + $ParPosNoart;


$insertdetails = mysql_query("insert into indexcontacts(indexnum, sexPartStatusUnk,sexPartPosNoart,sexPartNofollowup,ChilStatusUnk,ChilPosNoart,
ChilNoFollowup,ParStatusUnk,ParPosNoart,ParNofollowup, elicitedcontacts, eligibles) 
						values ('$indexnum', '$sexPartStatusUnk','$sexPartPosNoart', '$sexPartNofollowup','$ChilStatusUnk','$ChilPosNoart','$ChilNoFollowup',
						'$ParStatusUnk', '$ParPosNoart', '$ParNofollowup', '$elicited', '$eligibles')");
	
	if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysql_error();
				 }	
  }				 
?>

  <form method="post" action="indexcontacts.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Index client number</label>
  	   <select name="indexnum" style="float:left; height:40px" required = "Yes" ><option>
														<?php
									$selectindex=mysql_query("SELECT * FROM indexreg");
				while($indexnum=mysql_fetch_array($selectindex)){
				
				echo "<option>".$indexnum['indexnum']."</option>";
				}
			?></option></select>  
  	</div><br><br>
		<div class="input-group">
  	  <label>Sexual Partners with Unkown HIV status</label>
  	  <input type="number" name="sexPartStatusUnk"  min ="0"required="yes" placeholder ="UnkownStatus">
  	</div>
	<div class="input-group">
  	  <label>Sexual Partners HIV Pos not on ART</label>
  	  <input type="number" name="sexPartPosNoart"  min ="0" required="yes" placeholder ="Pos no art">
  	</div>
	<div class="input-group">
  	  <label>Sexual Partners no follow up needed</label>
  	  <input type="number" name="sexPartNofollowup"  min ="0"required="yes" placeholder ="UnkownStatus">
  	</div>
	<div class="input-group">
  	  <label>Children with Unkown HIV status</label>
  	  <input type="number" name="ChilStatusUnk" min ="0"required="yes" placeholder ="UnkownStatus">
  	</div>
	<div class="input-group">
  	  <label>Children HIV Pos not on ART</label>
  	  <input type="number" name="ChilPosNoart"  min ="0"required="yes" placeholder ="Pos no art">
  	</div>
	<div class="input-group">
  	  <label>Children no follow up needed</label>
  	  <input type="number" name="ChilNoFollowup" min ="0" required="yes" placeholder ="UnkownStatus">
  	</div>
	<div class="input-group">
  	  <label>Parents with Unkown HIV status</label>
  	  <input type="number" name="ParStatusUnk" max = "1" min ="0" required="yes" placeholder ="UnkownStatus">
  	</div>
	<div class="input-group">
  	  <label>Parents HIV Pos not on ART</label>
  	  <input type="number" name="ParPosNoart"  max = "1" min ="0" required="yes" placeholder ="Pos no art">
  	</div>
	<div class="input-group">
  	  <label>Parents no follow up needed</label>
  	  <input type="number" name="ParNofollowup" max = "1" min ="0" required="yes" placeholder ="UnkownStatus">
  	</div>
	
  	<br><br>
  	<div class="input-group">
	<input type ="reset" class ="btn"value="Clear" style= "width: 60px; background-color: purple"=>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <button type="submit" class="btn" name="submit">Finish</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  	<p>
   <a href="indexclient.php">New Index</a><td></td> &nbsp;&nbsp;&nbsp;&nbsp; <a href="contacts.php">Reached Contacts</a>
  	</p>
  </form>
</body>
</html>