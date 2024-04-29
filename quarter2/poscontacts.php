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
  	<h2>Age disagregated summary Positive contacts</h2>
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
				$select1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Chileka Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck1=mysql_num_rows($select1);
				
				$select2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Chileka Health Centre' AND gender = 'Male' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck1=mysql_num_rows($select2);
				
				$select3=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Chileka Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck2=mysql_num_rows($select3);
				
				$select4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Chileka Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck2=mysql_num_rows($select4);
				
				$select5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Chileka Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck3=mysql_num_rows($select5);
				
				$select6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Chileka Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck3=mysql_num_rows($select6);
				
				
				$select7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Chileka Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck4=mysql_num_rows($select7);
				
				$select8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Chileka Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck4=mysql_num_rows($select8);
				
				$select9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Chileka Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck5=mysql_num_rows($select9);
				
				$select10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Chileka Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck5=mysql_num_rows($select10);
				
				$select11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Chileka Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck6=mysql_num_rows($select11);
				
				$select12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Chileka Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck6=mysql_num_rows($select12);
				
				$select13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Chileka Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck7=mysql_num_rows($select13);
				
				$select14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Chileka Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck7=mysql_num_rows($select14);
				
				$select15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Chileka Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck8=mysql_num_rows($select15);
				
				$select16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Chileka Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck8=mysql_num_rows($select16);
				
				$select17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Chileka Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck9=mysql_num_rows($select17);
				
				$select18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Chileka Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck9=mysql_num_rows($select18);
				
				$select19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Chileka Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck10=mysql_num_rows($select19);
				
				$select20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Chileka Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck10=mysql_num_rows($select20);
				
				$select21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Chileka Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fck11=mysql_num_rows($select21);
				$select22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Chileka Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mck11=mysql_num_rows($select22);
								
				// 2 Area 25 querying date
				
				$area251=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Area 25 Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$f251=mysql_num_rows($area251);
				
				$area252=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Area 25 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m251=mysql_num_rows($area252);
				
				$area253=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Arae 25 Health Centre' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f252=mysql_num_rows($area253);
				
				$area254=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Area 25 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m252=mysql_num_rows($area254);
				
				$area255=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Area 25 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f253=mysql_num_rows($area255);
				
				$area256=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Area 25 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m253=mysql_num_rows($area256);
				
				
				$area257=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Area 25 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f254=mysql_num_rows($area257);
				
				$area258=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Area 25 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m254=mysql_num_rows($area258);
				
				$area259=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Area 25 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f255=mysql_num_rows($area259);
				
				$area2510=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Area 25 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m255=mysql_num_rows($area2510);
				
				$area2511=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Area 25 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f256=mysql_num_rows($area2511);
				
				$area2512=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Area 25 Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m256=mysql_num_rows($area2512);
				
				$area2513=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Area 25 Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f257=mysql_num_rows($area2513);
				
				$area2514=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Area 25 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m257=mysql_num_rows($area2514);
				
				$area2515=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Area 25 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f258=mysql_num_rows($area2515);
				
				$area2516=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Area 25 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m258=mysql_num_rows($area2516);
				
				$area2517=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Area 25 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f259=mysql_num_rows($area2517);
				
				$area2518=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Area 25 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m259=mysql_num_rows($area2518);
				
				$area2519=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Area 25 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f2510=mysql_num_rows($area2519);
				
				$area2520=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Area 25 Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m2510=mysql_num_rows($area2520);
				
				$area2521=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Area 25 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f2511=mysql_num_rows($area2521);
				$area2522=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Area 25 Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m2511=mysql_num_rows($area2522);
				
				// 2 Area 18 querying date
				
				$area181=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Area 18 Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$f181=mysql_num_rows($area181);
				
				$area182=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Area 18 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m181=mysql_num_rows($area182);
				
				$area183=mysql_query("SELECT * FROM vapncontacts where age >4 AND age <10 AND facility = 'Area 18 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f182=mysql_num_rows($area183);
				
				$area184=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Area 18 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m182=mysql_num_rows($area184);
				
				$area185=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Area 18 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f183=mysql_num_rows($area185);
				
				$area186=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Area 18 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m183=mysql_num_rows($area186);
				
				
				$area187=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Area 18 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f184=mysql_num_rows($area187);
				
				$area188=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Area 18 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m184=mysql_num_rows($area188);
				
				$area189=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Area 18 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f185=mysql_num_rows($area189);
				
				$area1810=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Area 18 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m185=mysql_num_rows($area1810);
				
				$area1811=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Area 18 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f186=mysql_num_rows($area1811);
				
				$area1812=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Area 18 Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m186=mysql_num_rows($area1812);
				
				$area1813=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Area 18 Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f187=mysql_num_rows($area1813);
				
				$area1814=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Area 18 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m187=mysql_num_rows($area1814);
				
				$area1815=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Area 18 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f188=mysql_num_rows($area1815);
				
				$area1816=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Area 18 Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m188=mysql_num_rows($area1816);
				
				$area1817=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Area 18 Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f189=mysql_num_rows($area1817);
				
				$area1818=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Area 18 Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m189=mysql_num_rows($area1818);
				
				$area1819=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Area 18 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f1810=mysql_num_rows($area1819);
				
				$area1820=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Area 18 Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m1810=mysql_num_rows($area1820);
				
				$area1821=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Area 18 Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$f1811=mysql_num_rows($area1821);
				$area1822=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Area 18 Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$m1811=mysql_num_rows($area1822);
				
				// 4 Chitezde querying date
				$chitedze1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Chitedze Health centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$fcz1=mysql_num_rows($chitedze1);
				
				$chitedze2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Chitedze Health centre' AND gender = 'Male'	AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz1=mysql_num_rows($chitedze2);
				
				$chitedze3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Chitedze Health centre' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz2=mysql_num_rows($chitedze3);
				
				$chitedze4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Chitedze Health centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz2=mysql_num_rows($chitedze4);
				
				$chitedze5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Chitedze Health centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz3=mysql_num_rows($chitedze5);
				
				$chitedze6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Chitedze Health centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz3=mysql_num_rows($chitedze6);
				
				
				$chitedze7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Chitedze Health centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz4=mysql_num_rows($chitedze7);
				
				$chitedze8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Chitedze Health centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz4=mysql_num_rows($chitedze8);
				
				$chitedze9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Chitedze Health centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz5=mysql_num_rows($chitedze9);
				
				$chitedze10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Chitedze Health centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz5=mysql_num_rows($chitedze10);
				
				$chitedze11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Chitedze Health centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz6=mysql_num_rows($chitedze11);
				
				$chitedze12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Chitedze Health centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz6=mysql_num_rows($chitedze12);
				
				$chitedze13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Chitedze Health centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz7=mysql_num_rows($chitedze13);
				
				$chitedze14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Chitedze Health centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz7=mysql_num_rows($chitedze14);
				
				$chitedze15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Chitedze Health centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz8=mysql_num_rows($chitedze15);
				
				$chitedze16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Chitedze Health centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz8=mysql_num_rows($chitedze16);
				
				$chitedze17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Chitedze Health centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz9=mysql_num_rows($chitedze17);
				
				$chitedze18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Chitedze Health centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz9=mysql_num_rows($chitedze18);
				
				$chitedze19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Chitedze Health centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz10=mysql_num_rows($chitedze19);
				
				$chitedze20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Chitedze Health centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz10=mysql_num_rows($chitedze20);
				
				$chitedze21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Chitedze Health centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fcz11=mysql_num_rows($chitedze21);
				$chitedze22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Chitedze Health centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mcz11=mysql_num_rows($chitedze22);
				
				// 5 Nathenje querying date
				$nathenje1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Nathenje Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$fnj1=mysql_num_rows($nathenje1);
				
				$nathenje2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Nathenje Health Centre' AND gender = 'Male'	AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj1=mysql_num_rows($nathenje2);
				
				$nathenje3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Nathenje Health Centre' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj2=mysql_num_rows($nathenje3);
				
				$nathenje4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Nathenje Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj2=mysql_num_rows($nathenje4);
				
				$nathenje5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Nathenje Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj3=mysql_num_rows($nathenje5);
				
				$nathenje6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Nathenje Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj3=mysql_num_rows($nathenje6);
				
				
				$nathenje7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Nathenje Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj4=mysql_num_rows($nathenje7);
				
				$nathenje8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Nathenje Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj4=mysql_num_rows($nathenje8);
				
				$nathenje9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Nathenje Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj5=mysql_num_rows($nathenje9);
				
				$nathenje10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Nathenje Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj5=mysql_num_rows($nathenje10);
				
				$nathenje11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Nathenje Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj6=mysql_num_rows($nathenje11);
				
				$nathenje12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Nathenje Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj6=mysql_num_rows($nathenje12);
				
				$nathenje13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Nathenje Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj7=mysql_num_rows($nathenje13);
				
				$nathenje14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Nathenje Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj7=mysql_num_rows($nathenje14);
				
				$nathenje15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Nathenje Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj8=mysql_num_rows($nathenje15);
				
				$nathenje16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Nathenje Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj8=mysql_num_rows($nathenje16);
				
				$nathenje17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Nathenje Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj9=mysql_num_rows($nathenje17);
				
				$nathenje18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Nathenje Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj9=mysql_num_rows($nathenje18);
				
				$nathenje19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Nathenje Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj10=mysql_num_rows($nathenje19);
				
				$nathenje20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Nathenje Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj10=mysql_num_rows($nathenje20);
				
				$nathenje21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Nathenje Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fnj11=mysql_num_rows($nathenje21);
				$nathenje22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Nathenje Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mnj11=mysql_num_rows($nathenje22);
				// 7 Lumbadzi querying date
				$Lumbadzi1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Lumbadzi Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$flu1=mysql_num_rows($Lumbadzi1);
				
				$Lumbadzi2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Lumbadzi Health Centre' AND gender = 'Male' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu1=mysql_num_rows($Lumbadzi2);
				
				$Lumbadzi3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Lumbadzi Health Centre' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu2=mysql_num_rows($Lumbadzi3);
				
				$Lumbadzi4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Lumbadzi Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu2=mysql_num_rows($Lumbadzi4);
				
				$Lumbadzi5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Lumbadzi Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu3=mysql_num_rows($Lumbadzi5);
				
				$Lumbadzi6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Lumbadzi Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu3=mysql_num_rows($Lumbadzi6);
				
				
				$Lumbadzi7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Lumbadzi Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu4=mysql_num_rows($Lumbadzi7);
				
				$Lumbadzi8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Lumbadzi Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu4=mysql_num_rows($Lumbadzi8);
				
				$Lumbadzi9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Lumbadzi Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu5=mysql_num_rows($Lumbadzi9);
				
				$Lumbadzi10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Lumbadzi Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu5=mysql_num_rows($Lumbadzi10);
				
				$Lumbadzi11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Lumbadzi Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu6=mysql_num_rows($Lumbadzi11);
				
				$Lumbadzi12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Lumbadzi Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu6=mysql_num_rows($Lumbadzi12);
				
				$Lumbadzi13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Lumbadzi Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu7=mysql_num_rows($Lumbadzi13);
				
				$Lumbadzi14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Lumbadzi Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu7=mysql_num_rows($Lumbadzi14);
				
				$Lumbadzi15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Lumbadzi Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu8=mysql_num_rows($Lumbadzi15);
				
				$Lumbadzi16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Lumbadzi Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu8=mysql_num_rows($Lumbadzi16);
				
				$Lumbadzi17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Lumbadzi Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu9=mysql_num_rows($Lumbadzi17);
				
				$Lumbadzi18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Lumbadzi Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu9=mysql_num_rows($Lumbadzi18);
				
				$Lumbadzi19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Lumbadzi Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu10=mysql_num_rows($Lumbadzi19);
				
				$Lumbadzi20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Lumbadzi Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu10=mysql_num_rows($Lumbadzi20);
				
				$Lumbadzi21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Lumbadzi Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flu11=mysql_num_rows($Lumbadzi21);
				$Lumbadzi22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Lumbadzi Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlu11=mysql_num_rows($Lumbadzi22);
				
				// 7 Lighthouse querying date
				$Lighthouse1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Lighthouse'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$flh1=mysql_num_rows($Lighthouse1);
				
				$Lighthouse2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Lighthouse' AND gender = 'Male' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh1=mysql_num_rows($Lighthouse2);
				
				$Lighthouse3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Lighthouse' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh2=mysql_num_rows($Lighthouse3);
				
				$Lighthouse4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Lighthouse' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh2=mysql_num_rows($Lighthouse4);
				
				$Lighthouse5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Lighthouse' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh3=mysql_num_rows($Lighthouse5);
				
				$Lighthouse6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Lighthouse' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh3=mysql_num_rows($Lighthouse6);
				
				
				$Lighthouse7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Lighthouse' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh4=mysql_num_rows($Lighthouse7);
				
				$Lighthouse8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Lighthouse' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh4=mysql_num_rows($Lighthouse8);
				
				$Lighthouse9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Lighthouse' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh5=mysql_num_rows($Lighthouse9);
				
				$Lighthouse10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Lighthouse' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh5=mysql_num_rows($Lighthouse10);
				
				$Lighthouse11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Lighthouse' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh6=mysql_num_rows($Lighthouse11);
				
				$Lighthouse12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Lighthouse'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh6=mysql_num_rows($Lighthouse12);
				
				$Lighthouse13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Lighthouse' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh7=mysql_num_rows($Lighthouse13);
				
				$Lighthouse14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Lighthouse' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh7=mysql_num_rows($Lighthouse14);
				
				$Lighthouse15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Lighthouse' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh8=mysql_num_rows($Lighthouse15);
				
				$Lighthouse16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Lighthouse' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh8=mysql_num_rows($Lighthouse16);
				
				$Lighthouse17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Lighthouse' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh9=mysql_num_rows($Lighthouse17);
				
				$Lighthouse18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Lighthouse' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh9=mysql_num_rows($Lighthouse18);
				
				$Lighthouse19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Lighthouse' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh10=mysql_num_rows($Lighthouse19);
				
				$Lighthouse20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Lighthouse'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh10=mysql_num_rows($Lighthouse20);
				
				$Lighthouse21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Lighthouse' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$flh11=mysql_num_rows($Lighthouse21);
				$Lighthouse22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Lighthouse'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mlh11=mysql_num_rows($Lighthouse22);
				// 7 Kawale querying date
				$Kawale1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Kawale Health Centre'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$fkw1=mysql_num_rows($Kawale1);
				
				$Kawale2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Kawale Health Centre' AND gender = 'Male'	AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw1=mysql_num_rows($Kawale2);
				
				$Kawale3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Kawale Health Centre' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw2=mysql_num_rows($Kawale3);
				
				$Kawale4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Kawale Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw2=mysql_num_rows($Kawale4);
				
				$Kawale5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Kawale Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw3=mysql_num_rows($Kawale5);
				
				$Kawale6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Kawale Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw3=mysql_num_rows($Kawale6);
				
				
				$Kawale7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Kawale Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw4=mysql_num_rows($Kawale7);
				
				$Kawale8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Kawale Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw4=mysql_num_rows($Kawale8);
				
				$Kawale9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Kawale Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw5=mysql_num_rows($Kawale9);
				
				$Kawale10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Kawale Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw5=mysql_num_rows($Kawale10);
				
				$Kawale11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Kawale Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw6=mysql_num_rows($Kawale11);
				
				$Kawale12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Kawale Health Centre'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw6=mysql_num_rows($Kawale12);
				
				$Kawale13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Kawale Health Centre' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw7=mysql_num_rows($Kawale13);
				
				$Kawale14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Kawale Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw7=mysql_num_rows($Kawale14);
				
				$Kawale15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Kawale Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw8=mysql_num_rows($Kawale15);
				
				$Kawale16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Kawale Health Centre' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw8=mysql_num_rows($Kawale16);
				
				$Kawale17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Kawale Health Centre' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw9=mysql_num_rows($Kawale17);
				
				$Kawale18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Kawale Health Centre' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw9=mysql_num_rows($Kawale18);
				
				$Kawale19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Kawale Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw10=mysql_num_rows($Kawale19);
				
				$Kawale20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Kawale Health Centre'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw10=mysql_num_rows($Kawale20);
				
				$Kawale21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Kawale Health Centre' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkw11=mysql_num_rows($Kawale21);
				$Kawale22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Kawale Health Centre'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkw11=mysql_num_rows($Kawale22);
				// 7 Kamuzu Central Hospital querying date
				$kamuzu1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Kamuzu Central Hospital'AND gender = 'Female' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch1=mysql_num_rows($kamuzu1);
				
				$kamuzu2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Kamuzu Central Hospital' AND gender = 'Male' AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch1=mysql_num_rows($kamuzu2);
				
				$kamuzu3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch2=mysql_num_rows($kamuzu3);
				
				$kamuzu4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Kamuzu Central Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch2=mysql_num_rows($kamuzu4);
				
				$kamuzu5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch3=mysql_num_rows($kamuzu5);
				
				$kamuzu6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Kamuzu Central Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch3=mysql_num_rows($kamuzu6);
				
				
				$kamuzu7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch4=mysql_num_rows($kamuzu7);
				
				$kamuzu8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Kamuzu Central Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch4=mysql_num_rows($kamuzu8);
				
				$kamuzu9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Kamuzu Central Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch5=mysql_num_rows($kamuzu9);
				
				$kamuzu10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Kamuzu Central Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch5=mysql_num_rows($kamuzu10);
				
				$kamuzu11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch6=mysql_num_rows($kamuzu11);
				
				$kamuzu12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Kamuzu Central Hospital'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch6=mysql_num_rows($kamuzu12);
				
				$kamuzu13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Kamuzu Central Hospital' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch7=mysql_num_rows($kamuzu13);
				
				$kamuzu14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Kamuzu Central Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch7=mysql_num_rows($kamuzu14);
				
				$kamuzu15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Kamuzu Central Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch8=mysql_num_rows($kamuzu15);
				
				$kamuzu16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Kamuzu Central Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch8=mysql_num_rows($kamuzu16);
				
				$kamuzu17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Kamuzu Central Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch9=mysql_num_rows($kamuzu17);
				
				$kamuzu18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Kamuzu Central Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch9=mysql_num_rows($kamuzu18);
				
				$kamuzu19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch10=mysql_num_rows($kamuzu19);
				
				$kamuzu20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Kamuzu Central Hospital'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch10=mysql_num_rows($kamuzu20);
				
				$kamuzu21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Kamuzu Central Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fkch11=mysql_num_rows($kamuzu21);
				$kamuzu22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Kamuzu Central Hospital'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mkch11=mysql_num_rows($kamuzu22);
				// 7 Mitundu Rural Hospital querying date
				$mitundu1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Mitundu Rural Hospital'AND gender = 'Female'	 AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$fmt1=mysql_num_rows($mitundu1);
				
				$mitundu2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Mitundu Rural Hospital' AND gender = 'Male'	AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt1=mysql_num_rows($mitundu2);
				
				$mitundu3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Mitundu Rural Hospital' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt2=mysql_num_rows($mitundu3);
				
				$mitundu4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Mitundu Rural Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt2=mysql_num_rows($mitundu4);
				
				$mitundu5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Mitundu Rural Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt3=mysql_num_rows($mitundu5);
				
				$mitundu6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Mitundu Rural Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt3=mysql_num_rows($mitundu6);
				
				
				$mitundu7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Mitundu Rural Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt4=mysql_num_rows($mitundu7);
				
				$mitundu8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Mitundu Rural Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt4=mysql_num_rows($mitundu8);
				
				$mitundu9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Mitundu Rural Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt5=mysql_num_rows($mitundu9);
				
				$mitundu10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Mitundu Rural Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt5=mysql_num_rows($mitundu10);
				
				$mitundu11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Mitundu Rural Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt6=mysql_num_rows($mitundu11);
				
				$mitundu12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Mitundu Rural Hospital'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt6=mysql_num_rows($mitundu12);
				
				$mitundu13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Mitundu Rural Hospital' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt7=mysql_num_rows($mitundu13);
				
				$mitundu14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Mitundu Rural Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt7=mysql_num_rows($mitundu14);
				
				$mitundu15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Mitundu Rural Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt8=mysql_num_rows($mitundu15);
				
				$mitundu16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Mitundu Rural Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt8=mysql_num_rows($mitundu16);
				
				$mitundu17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Mitundu Rural Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt9=mysql_num_rows($mitundu17);
				
				$mitundu18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Mitundu Rural Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt9=mysql_num_rows($mitundu18);
				
				$mitundu19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Mitundu Rural Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt10=mysql_num_rows($mitundu19);
				
				$mitundu20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Mitundu Rural Hospital'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt10=mysql_num_rows($mitundu20);
				
				$mitundu21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Mitundu Rural Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fmt11=mysql_num_rows($mitundu21);
				$mitundu22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Mitundu Rural Hospital'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mmt11=mysql_num_rows($mitundu22);
				
				// 7 Bwaila Hospital querying date
				$bwaila1=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Bwaila Hospital'AND gender = 'Female'	 AND testresult ='New Positive'AND datetested <='2020-03-31'");	
				$fbw1=mysql_num_rows($bwaila1);
				
				$bwaila2=mysql_query("SELECT * FROM vapncontacts where age <5 AND facility = 'Bwaila Hospital' AND gender = 'Male'	AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw1=mysql_num_rows($bwaila2);
				
				$bwaila3=mysql_query("SELECT  * FROM vapncontacts where age >4 AND age <10  AND facility ='Bwaila Hospital' AND gender ='female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw2=mysql_num_rows($bwaila3);
				
				$bwaila4=mysql_query("SELECT * FROM vapncontacts where age >4 AND age < 10 AND facility = 'Bwaila Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw2=mysql_num_rows($bwaila4);
				
				$bwaila5=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Bwaila Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw3=mysql_num_rows($bwaila5);
				
				$bwaila6=mysql_query("SELECT * FROM vapncontacts where age>9 AND age <15 AND facility ='Bwaila Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw3=mysql_num_rows($bwaila6);
				
				
				$bwaila7=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Bwaila Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw4=mysql_num_rows($bwaila7);
				
				$bwaila8=mysql_query("SELECT * FROM vapncontacts where age >14 AND age <20 AND facility ='Bwaila Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw4=mysql_num_rows($bwaila8);
				
				$bwaila9=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Bwaila Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw5=mysql_num_rows($bwaila9);
				
				$bwaila10=mysql_query("SELECT * FROM vapncontacts where age >19 AND age <25 AND facility ='Bwaila Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw5=mysql_num_rows($bwaila10);
				
				$bwaila11=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Bwaila Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw6=mysql_num_rows($bwaila11);
				
				$bwaila12=mysql_query("SELECT * FROM vapncontacts where age >24 AND age <30 AND facility ='Bwaila Hospital'AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw6=mysql_num_rows($bwaila12);
				
				$bwaila13=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Bwaila Hospital' AND gender='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw7=mysql_num_rows($bwaila13);
				
				$bwaila14=mysql_query("SELECT * FROM vapncontacts where age >29 AND age <35 AND facility ='Bwaila Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw7=mysql_num_rows($bwaila14);
				
				$bwaila15=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Bwaila Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw8=mysql_num_rows($bwaila15);
				
				$bwaila16=mysql_query("SELECT * FROM vapncontacts where age >34 AND age <40 AND facility ='Bwaila Hospital' AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw8=mysql_num_rows($bwaila16);
				
				$bwaila17=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Bwaila Hospital' AND gender = 'Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw9=mysql_num_rows($bwaila17);
				
				$bwaila18=mysql_query("SELECT * FROM vapncontacts where age >39 AND age <45 AND facility ='Bwaila Hospital' AND gender ='Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw9=mysql_num_rows($bwaila18);
				
				$bwaila19=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Bwaila Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw10=mysql_num_rows($bwaila19);
				
				$bwaila20=mysql_query("SELECT * FROM vapncontacts where age >44 AND age <50 AND facility ='Bwaila Hospital'AND gender = 'Male'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw10=mysql_num_rows($bwaila20);
				
				$bwaila21=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Bwaila Hospital' AND gender ='Female'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$fbw11=mysql_num_rows($bwaila21);
				$bwaila22=mysql_query("SELECT * FROM vapncontacts where age >49 AND facility ='Bwaila Hospital'AND gender = 'MAle'AND testresult ='New Positive'AND datetested <='2020-03-31'");
				$mbw11=mysql_num_rows($bwaila22);
								
								


				?>
				<center>  			
				<table width="70%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> < 5yrs</font>
</td><td><font size ="+1"><b>5-9yrs</font></td><td><font size ="+1"><b> 10-14 yrs</font></td><td><font size= "+1">
<b>15-19 yrs</font></td><td><font size= "+1"><b>20-24 yrs</font></td><td><font size= "+1"><b>25-29yrs</font></td><td><font size= "+1"><b>30-34yrs</font>
</td><td><font size= "+1"><b>34-39yrs</font></td><td><font size= "+1"><b>40-44yrs</font></td><td><font size= "+1"><b>45-49yrs</font>
</td><td><font size= "+1"><b>50+ yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chileka</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fck4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck3</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck4
 </font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck5</font></td></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck6</font><td><fon tsize='1'>
 &nbsp;&nbsp;&nbsp;$mck7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck8</font> </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck9</font></td><td><fon tsize='1'>
 &nbsp;&nbsp;&nbsp;$mck10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck11</font></td></tr> ";
 
 //2 Area 25					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Area 25</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f251</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f252</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f253</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$f254</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f255</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f256</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f257</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f258</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f259</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f2510</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f2511</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m251</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m252</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m253</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$m254</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m255</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m256</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m257</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m258</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m259</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m2510</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m2511</font></td></tr> ";
 
 //3 Area 18					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Area 18</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f181</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f182</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$f183</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$f184</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f185</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f186</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f187</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f188</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f189</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f1810</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$f1811</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m181</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m182</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$m183</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$m184</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m185</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m186</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m187</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m188</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m189</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m1810</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$m1811</font></td></tr> ";
 
 //4 Chitedze					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chitedze</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fcz4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fcz11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mcz4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mcz11</font></td></tr> ";
 
 //5 Nathenje					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Nathenje</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fnj4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fnj11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mnj4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mnj11</font></td></tr> ";
 //6 Lumbadzi					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lumbadzi</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flu1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flu2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flu3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$flu4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flu11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mlu4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlu11</font></td></tr> ";
 //7 Lighthouse					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lighthouse</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flh1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flh2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$flh3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$flh4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$flh11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mlh4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mlh11</font></td></tr> ";
 //8 Kawale					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Kawale</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fkw4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkw11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mkw4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkw11</font></td></tr> ";
 
 //9 K. C. H					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;K. C. H</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fkch4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fkch11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mkch4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mkch11</font></td></tr> ";
 //10 Mitundu					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Mitundu</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fmt4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fmt11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mmt4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mmt11</font></td></tr> ";
 //11 Bwaila					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Bwaila</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fbw4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fbw11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$mbw4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mbw11</font></td></tr> ";
 
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
