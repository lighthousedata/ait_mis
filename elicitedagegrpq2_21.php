<?php require_once("includes/Connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php //include("includes/header.php"); ?>
<?php include('server.php') ?>
	
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Age and gender disagregation of contacts need follow up</h2>
	<?php
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
         <div class="col-lg-12">
				<?php
				// 1 Chileka querying date
				$select1=mysql_query("SELECT * FROM contacts where  age <15 AND gender = 'Female' AND facility LIKE '%Umodzi%' AND indexinterviewdate>='2021-07-01'");	
				$fck1=mysql_num_rows($select1);
				
				$select2=mysql_query("SELECT * FROM contacts where  age <15 AND gender = 'Male' AND facility LIKE '%Umodzi%' AND indexinterviewdate>='2021-07-01'")
				;$mck1=mysql_num_rows($select2);
				
				$select3=mysql_query("SELECT * FROM contacts where   age >14 AND gender = 'Female' AND facility LIKE '%Umodzi%' AND indexinterviewdate>='2021-07-01'");
				$fck2=mysql_num_rows($select3);
				
				$select4=mysql_query("SELECT * FROM contacts where   age >14 AND gender = 'Male' AND facility LIKE '%Umodzi%' AND indexinterviewdate>='2021-07-01'");
				$mck2=mysql_num_rows($select4);
				
				
				
				
				
				?>
				<center>  			
				<table width="80%" border="0"><td><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> < 15yrs</font>
</td><td><font size ="+1"><b>Above 15 yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;UFC</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td></tr> ";
 
 
 ?>
							</td></tr>	
							<tr><td><br><br>
							<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>
							</td><td></td><td></td><td><p><a href = "managecontacts.php"class="btn" style="background-color: red">Cancel </a></p>
	</td></tr>
	   </table>
	   <br />	
			</div>
		</div>                       
       </div>
     </div> 
    </div>        
    </div>				     
<?php //include("includes/Footer.php"); ?>
