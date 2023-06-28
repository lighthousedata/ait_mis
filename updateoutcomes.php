<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
<?php //include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Contacts outcomes</h2>
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
			<div class="yaa">
        		<?php
				if(isset($_POST['submit'])){
				$outcomedate=$_POST['outcomedate'];
				 $date_explode = explode ('-',$outcomedate);
				$day = $date_explode[2];
				$month = $date_explode[1];
				$year = $date_explode[0];
				
				$today_explode = explode ('/',$today);
				$tday = $today_explode[0];
				$tmonth = $today_explode[1];
				$tyear = $today_explode[2];
				
				$outcomedate_new = $year.$month.$day;
				$tdate = $tyear.$tmonth.$tday;
								
				if ($outcomedate_new > $tdate){
					echo "Sorry outcomes can not have future dates";//." " .$outcomedate_new ." " ."today is". " ". $tdate;
				}
  
				else {
				
				
				
					
				$contnum=$_POST['contnum'];
				$outcome=$_POST['outcome'];
			
									
				$insertdetails =mysql_query ("INSERT INTO contactsoutcomes (contnum, outcome, outcomedate) 
							values('$contnum','$outcome','$outcomedate')"); 
							
			   if($insertdetails)
				 {
				 echo "<p><font color='green' style='text-align:center'>Data successfully saved</font></p>";
				 }else{
				 echo "<p><font color='red' style='text-align:center'>Insertion failed</font></p>".mysql_error();
				 }	
  }			
				}  
				?>	<center>
				
  <form method="post" action=" ">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Contact number</label>
  	  <select name="contnum" style ="float:left; height:40px" required><option>
														<?php
									$selectcontacts=mysql_query("SELECT * FROM contacts");
				while($contnum=mysql_fetch_array($selectcontacts)){
				
				echo "<option>".$contnum['contnum']."</option>";
				}
			?></option></select>  
  	</div>	<br><br>
	<div class="input-group">
	<label>Final Outcome</label>
  	  <select name="outcome" style="float:left; height:40px" required><option>
														<?php
									$selectoutcomes=mysql_query("SELECT * FROM outcomes");
				while($outcome=mysql_fetch_array($selectoutcomes)){
				
				echo "<option>".$outcome['outcomename']."</option>";
				}
			?><option></select>  
  	</div><br><br>
  	<div class="input-group">
  	  <label>Outcome Date</label>
  	  <input type="date" name="outcomedate" required="yes" placeholder =" outcomedate">
  		
  	</div><br><br>
  	<div class="input-group">
	<input type ="reset" class ="btn"value="Clear" style= "width: 60px; background-color: purple"=>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <button type="submit" class="btn" name="submit">Finish</button>
	  &nbsp;&nbsp;&nbsp;&nbsp;<a href ="index.php" class="btn" style="background-color: red">Cancel</a>
  	</div>
  	<p>
  	 <a href="contacts.php">Add contacts</a>
  	</p>
  </form>
</body>
</html>		