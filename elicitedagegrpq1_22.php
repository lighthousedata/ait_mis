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
  	<h2>Age and Gender Disagregation of Elicited Contacts</h2>
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
				$select1=mysql_query("SELECT * FROM contacts where  age <1 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck1=mysql_num_rows($select1);				
				$select2=mysql_query("SELECT * FROM contacts where  age <1 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$mck1=mysql_num_rows($select2);
				
				$select3=mysql_query("SELECT * FROM contacts where   age >=1 AND age <5 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck2=mysql_num_rows($select3);				
				$select4=mysql_query("SELECT * FROM contacts where   age >=1 AND age <5 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck2=mysql_num_rows($select4);
				
				$select5=mysql_query("SELECT * FROM contacts where  age <10 AND age >4 AND gender = 'Female' AND indexinterviewdate >'2022-03-31' AND indexinterviewdate <'2022-07-01'");$fck3=mysql_num_rows($select5);				
				$select6=mysql_query("SELECT * FROM contacts where  age <10 AND age >4 AND gender = 'Male' AND indexinterviewdate >'2022-03-31' AND indexinterviewdate <'2022-07-01'");$mck3=mysql_num_rows($select6);
				
				$select7=mysql_query("SELECT * FROM contacts where   age <15 AND age >9 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck4=mysql_num_rows($select7);				
				$select8=mysql_query("SELECT * FROM contacts where  age <15 AND age > 9 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck4=mysql_num_rows($select8);
				
				$select9=mysql_query("SELECT * FROM contacts where  age <20 AND age >14 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck5=mysql_num_rows($select9);				
				$select10=mysql_query("SELECT * FROM contacts where  age <20 AND age >14 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$mck5=mysql_num_rows($select10);
				
				$select11=mysql_query("SELECT * FROM contacts where  age <25 AND age >19 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck6=mysql_num_rows($select11);				
				$select12=mysql_query("SELECT * FROM contacts where  age <25 AND age >19 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck6=mysql_num_rows($select12);
				
				$select13=mysql_query("SELECT * FROM contacts where  age <30 AND age >24 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck7=mysql_num_rows($select13);				
				$select14=mysql_query("SELECT * FROM contacts where  age <30 AND age >24 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$mck7=mysql_num_rows($select14);
				
				$select15=mysql_query("SELECT * FROM contacts where  age <35 AND age >29 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck8=mysql_num_rows($select15);				
				$select16=mysql_query("SELECT * FROM contacts where  age <35 AND age >29 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck8=mysql_num_rows($select16);
				
				$select17=mysql_query("SELECT * FROM contacts where  age <40 AND age >34 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck9=mysql_num_rows($select17);				
				$select18=mysql_query("SELECT * FROM contacts where  age <40 AND age >34 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$mck9=mysql_num_rows($select18);
				
				$select19=mysql_query("SELECT * FROM contacts where  age <45 AND age >39 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck10=mysql_num_rows($select19);				
				$select20=mysql_query("SELECT * FROM contacts where   age <45 AND age >39 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck10=mysql_num_rows($select20);
				
				$select21=mysql_query("SELECT * FROM contacts where  age <50 AND age >44 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck11=mysql_num_rows($select21);				
				$select22=mysql_query("SELECT * FROM contacts where   age <50 AND age >44 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck11=mysql_num_rows($select22);
				
				$select23=mysql_query("SELECT * FROM contacts where  age >49 AND gender = 'Female' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");$fck12=mysql_num_rows($select23);				
				$select24=mysql_query("SELECT * FROM contacts where  age >49 AND gender = 'Male' AND indexinterviewdate>'2022-03-31' AND indexinterviewdate<'2022-07-01'");	$mck12=mysql_num_rows($select24);
				
				
				
				
				?>
				<center>  			
				<table width="80%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> below 1yr</font></td><td><font size= "+1"><b>1 - 4 yrs</font>
</td><td><font size ="+1"><b>5-9 yrs</font></td><td><font size ="+1"><b> 10-14 yrs</font></td><td><font size= "+1">
<b>15-19 yrs</font></td><td><font size= "+1"><b>20-24 yrs</font></td><td><font size= "+1"><b>25-29 yrs</font></td><td><font size= "+1"><b>31-34 yrs</font>
</td><td><font size= "+1"><b>34-39 yrs</font></td><td><font size= "+1"><b>40-44 yrs</font></td><td><font size= "+1"><b>45-49 yrs</font>
</td><td><font size= "+1"><b>50+ yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;UFC</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck3</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck4</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck5</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck6</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck7</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck8</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck9</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck10</font>
</td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck11</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck12</font></td></tr>  ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck3</font>
</td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck4</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck5</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck6</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck7</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck8</font>
</td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck9</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck10</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck11</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck12</font></td></tr> ";
 
 
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
