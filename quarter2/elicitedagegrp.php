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
  	<h2>Age disagregated Elicited contacts</h2>
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
				$select1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1505%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");	
				$fck1=mysql_num_rows($select1);
				
				$select2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1505%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'")
				;$mck1=mysql_num_rows($select2);
				
				$select3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1505%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fck2=mysql_num_rows($select3);
				
				$select4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1505%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mck2=mysql_num_rows($select4);
				
				// 2 Area 25 querying date
				
				$area251=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1502%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$f251=mysql_num_rows($area251);
				
				$area252=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1502%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$m251=mysql_num_rows($area252);
				
				$area253=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1502%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$f252=mysql_num_rows($area253);
				
				$area254=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1502%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$m252=mysql_num_rows($area254);
				
				// 2 Area 18 querying date
				
				$area181=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1501%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$f181=mysql_num_rows($area181);
				
				$area182=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1501%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$m181=mysql_num_rows($area182);
				
				$area183=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1501%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$f182=mysql_num_rows($area183);
				
				$area184=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1501%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$m182=mysql_num_rows($area184);
				
				// 4 Chitezde querying date
				$chitedze1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1507%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");	
				 $fcz1=mysql_num_rows($chitedze1);
				
				$chitedze2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1507%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mcz1=mysql_num_rows($chitedze2);
				
				$chitedze3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1507%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fcz2=mysql_num_rows($chitedze3);
				
				$chitedze4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1507%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<'2020-03-31'");
				$mcz2=mysql_num_rows($chitedze4);
					
				// 5 Nathenje querying date
				$nathenje1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1534%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fnj1=mysql_num_rows($nathenje1);
				
				$nathenje2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1534%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mnj1=mysql_num_rows($nathenje2);
				
				$nathenje3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1534%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fnj2=mysql_num_rows($nathenje3);
				
				$nathenje4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1534%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mnj2=mysql_num_rows($nathenje4);
				
				// 7 Lumbadzi querying date
				$Lumbadzi1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1521%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$flu1=mysql_num_rows($Lumbadzi1);
				
				$Lumbadzi2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1521%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mlu1=mysql_num_rows($Lumbadzi2);
				
				$Lumbadzi3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1521%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$flu2=mysql_num_rows($Lumbadzi3);
				
				$Lumbadzi4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1521%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mlu2=mysql_num_rows($Lumbadzi4);
				
				// 7 Lighthouse querying date
				$Lighthouse1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%4082%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$flh1=mysql_num_rows($Lighthouse1);
				
				$Lighthouse2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%4082%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mlh1=mysql_num_rows($Lighthouse2);
				
				$Lighthouse3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%4082%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$flh2=mysql_num_rows($Lighthouse3);
				
				$Lighthouse4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%4082%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mlh2=mysql_num_rows($Lighthouse4);
				
				// 7 Kawale querying date
				$Kawale1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1517%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fkw1=mysql_num_rows($Kawale1);
				
				$Kawale2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1517%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mkw1=mysql_num_rows($Kawale2);
				
				$Kawale3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1517%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fkw2=mysql_num_rows($Kawale3);
				
				$Kawale4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1517%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mkw2=mysql_num_rows($Kawale4);
				
				// 7 Kamuzu Central Hospital querying date
				$kamuzu1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1519%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				 $fkch1=mysql_num_rows($kamuzu1);
				
				$kamuzu2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1519%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mkch1=mysql_num_rows($kamuzu2);
				
				$kamuzu3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1519%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fkch2=mysql_num_rows($kamuzu3);
				
				$kamuzu4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1519%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mkch2=mysql_num_rows($kamuzu4);
				
				// 7 Mitundu Rural Hospital querying date
				$mitundu1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1530%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				 $fmt1=mysql_num_rows($mitundu1);
				
				$mitundu2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1530%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mmt1=mysql_num_rows($mitundu2);
				
				$mitundu3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1530%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fmt2=mysql_num_rows($mitundu3);
				
				$mitundu4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1530%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mmt2=mysql_num_rows($mitundu4);
				
				// 7 Bwaila Hospital querying date
				$bwaila1=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1503%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				 $fbw1=mysql_num_rows($bwaila1);
				
				$bwaila2=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age <15 AND indexcontacts.indexnum like '%1503%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mbw1=mysql_num_rows($bwaila2);
				
				$bwaila3=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1503%' AND indexcontacts.gender = 'Female' AND indexreg.dateidentified<='2020-03-31'");
				$fbw2=mysql_num_rows($bwaila3);
				
				$bwaila4=mysql_query("SELECT * FROM indexreg, indexcontacts where indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.age >14 AND indexcontacts.indexnum like '%1503%' AND indexcontacts.gender = 'Male' AND indexreg.dateidentified<='2020-03-31'");
				$mbw2=mysql_num_rows($bwaila4);
				?>
				<center>  			
				<table width="70%" border="0"><td><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> < 15yrs</font>
</td><td><font size ="+1"><b>Above 15 yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chileka</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td></tr> ";
 
 //2 Area 25					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Area 25</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f251</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f252</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m251</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m252</font></td><td></td></tr> ";
 
 //3 Area 18					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Area 18</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f181</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f182</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m181</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m182</font></td><td></td></tr> ";
 
 //4 Chitedze					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chitedze</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz2</font></td><td></td></tr> ";
 
 //5 Nathenje					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Nathenje</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj2</font></td><td></td></tr> ";
 //6 Lumbadzi					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lumbadzi</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flu1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flu2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu2</font></td><td></td></tr> ";
 //7 Lighthouse					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lighthouse</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flh1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flh2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh2</font></td><td></td></tr> ";
 //8 Kawale					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Kawale</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw2</font></td><td></td></tr> ";
 
 //9 K. C. H					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;K. C. H</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch2</font></td><td></td></tr> ";
 //10 Mitundu					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Mitundu</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt2</font></td><td></td></tr> ";
 //11 Bwaila					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Bwaila</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw2</font></td><td></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw2</font></td><td></td></tr> ";
 
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
