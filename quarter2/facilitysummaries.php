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
  	<h2>Active Index Testing Cascade</h2>
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
				$selectchileka=mysql_query("SELECT * FROM indexreg where facility='Chileka Health Centre' AND dateidentified <='2020-03-31'");
				$totindexreg=mysql_num_rows($selectchileka);
				$identfiedck=mysql_query("SELECT * FROM indexreg WHERE facility = 'Chileka Health Centre'AND dateidentified <='2020-03-31'");
				$offeredck=mysql_num_rows($identfiedck);
				$result= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum= indexcontacts.indexnum
				AND indexcontacts.indexnum like'%1505%' AND indexreg.dateidentified <='2020-03-31'");
				$row = mysql_fetch_assoc($result); 
				$sum = $row['Contacts'];
				$acceptck=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Chileka Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totaccept=mysql_num_rows($acceptck);
				$eligibleck= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Chileka Health Centre'AND indexreg.dateidentified <='2020-03-31'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes'" ));
				$toteligible=mysql_num_rows($eligibleck);
				$testvpchileka=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Chileka Health Centre'
				AND datetested <='2020-03-31'"); $testedvp=mysql_num_rows($testvpchileka);
				$reachedchileka=mysql_query("SELECT * FROM vapncontacts where Facility='Chileka Health Centre' AND datetested <='2020-03-31'");
				$reachedck=mysql_num_rows($reachedchileka);
				$reacheeligiblechileka=mysql_query("SELECT * FROM vapncontacts where Facility='Chileka Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31' ");
				$reachegck=mysql_num_rows($reacheeligiblechileka);
				$contactsposck=mysql_query("SELECT * FROM vapncontacts where Facility='Chileka Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactsck=mysql_num_rows($contactsposck);
				$testedchileka=mysql_query("SELECT * FROM contacts where facility='Chileka Health Centre' AND datetested <='2020-03-31'");
				$testedck=mysql_num_rows($testedchileka);
								
				// 2 Bwaila querying date
				$selectbwaila=mysql_query("SELECT * FROM indexreg where facility='Bwaila Hospital' AND dateidentified <='2020-03-31'");
				$totibwaila=mysql_num_rows($selectbwaila);
				$offeredbwaila=mysql_query("SELECT * FROM indexreg WHERE facility = 'Bwaila Hospital'AND dateidentified <='2020-03-31'");
				$offeredbw=mysql_num_rows($offeredbwaila);
				$resultbw= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like'%1503%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowbw = mysql_fetch_assoc($resultbw); 
				$sumbw = $rowbw['Contacts'];
				$acceptbw=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Bwaila Hospital' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptbw=mysql_num_rows($acceptbw);
				$eligiblebw= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Bwaila Hospital'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblebw=mysql_num_rows($eligiblebw);
				$testvapnbw=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Bwaila Hospital'
				AND datetested <='2020-03-31'"); $testedvpbw=mysql_num_rows($testvapnbw);
				$reachedbwaila=mysql_query("SELECT * FROM vapncontacts where Facility='Bwaila Hospital' AND datetested <='2020-03-31'");
				$reachedbw=mysql_num_rows($reachedbwaila);
				$reacheeligiblebwaila=mysql_query("SELECT * FROM vapncontacts where Facility='Bwaila Hospital' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reachegbw=mysql_num_rows($reacheeligiblebwaila);
				$contactsposbw=mysql_query("SELECT * FROM vapncontacts where Facility='Bwaila Hospital' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactsbw=mysql_num_rows($contactsposbw);
				$testedbwaila=mysql_query("SELECT * FROM contacts where facility='Bwaila Hospital' AND datetested <='2020-03-31'");
				$testedbw=mysql_num_rows($testedbwaila);
				
				// 3 Chitedze querying date
				$selectcz=mysql_query("SELECT * FROM indexreg where facility='Chitedze Health Centre' AND dateidentified <='2020-03-31'");
				$totcz=mysql_num_rows($selectcz);
				$offeredcz=mysql_query("SELECT * FROM indexreg WHERE facility = 'Chitedze Health Centre'AND dateidentified <='2020-03-31'");
				$offeredcz=mysql_num_rows($offeredcz);
				$resultcz= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg,indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like '%1507%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowcz = mysql_fetch_assoc($resultcz); 
				$sumcz = $rowcz['Contacts'];
				$acceptcz=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Chitedze Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptcz=mysql_num_rows($acceptcz);
				$eligiblecz= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Chitedze Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblecz=mysql_num_rows($eligiblecz);
				$testvapncz=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Chitedze Health Centre'
				AND datetested <='2020-03-31'"); $testedvpcz=mysql_num_rows($testvapncz);
				$reachedchitedze=mysql_query("SELECT * FROM vapncontacts where Facility='Chitedze Health Centre'AND datetested <='2020-03-31'");
				$reachedcz=mysql_num_rows($reachedchitedze);
				$reacheeligiblechitedze=mysql_query("SELECT * FROM vapncontacts where Facility='Chitedze Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31' ");
				$reachegcz=mysql_num_rows($reacheeligiblechitedze);
				$contactsposcz=mysql_query("SELECT * FROM vapncontacts where Facility='Chitedze Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactscz=mysql_num_rows($contactsposcz);
				$testedchetedze=mysql_query("SELECT * FROM contacts where facility='Chitedze Health Centre' AND datetested <='2020-03-31'");
				$testedcz=mysql_num_rows($testedchetedze);
				
				// 4 Lighthouse querying data
				$selectlh=mysql_query("SELECT * FROM indexreg where facility='Lighthouse'AND dateidentified <='2020-03-31'");
				$totlh=mysql_num_rows($selectlh);
				$offeredlh=mysql_query("SELECT * FROM indexreg WHERE facility = 'Lighthouse'AND dateidentified <='2020-03-31'");
				$offeredlh=mysql_num_rows($offeredlh);
				$resultlh= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like'%4082%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowlh = mysql_fetch_assoc($resultlh); 
				$sumlh = $rowlh['Contacts'];
				$acceptlh=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Lighthouse' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptlh=mysql_num_rows($acceptlh);
				$eligiblelh= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Lighthouse'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblelh=mysql_num_rows($eligiblelh);
				$testvapnlh=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Lighthouse' AND datetested <='2020-03-31'");
				$testedvplh=mysql_num_rows($testvapnlh);
				$reachedlh=mysql_query("SELECT * FROM vapncontacts where Facility='Lighthouse' AND datetested <='2020-03-31'");
				$reachlh=mysql_num_rows($reachedlh);
				$reacheeligiblelh=mysql_query("SELECT * FROM vapncontacts where Facility='Lighthouse' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31' ");
				$reacheglh=mysql_num_rows($reacheeligiblelh);
				$contactsposlh=mysql_query("SELECT * FROM vapncontacts where Facility='Lighthouse' AND testresult = 'New positive'  AND datetested <='2020-03-31'");
				$poscontactslh=mysql_num_rows($contactsposlh);
				$testedlighthouse=mysql_query("SELECT * FROM contacts where facility='Lighthouse' AND datetested <='2020-03-31'");
				$testedlh=mysql_num_rows($testedlighthouse);
				
				// 5 Nathenje querying data
				$selectnj=mysql_query("SELECT * FROM indexreg where facility='Nathenje Health Centre' AND dateidentified <='2020-03-31'");
				$totnj=mysql_num_rows($selectnj);
				$offerednj=mysql_query("SELECT * FROM indexreg WHERE facility = 'Nathenje Health Centre' AND dateidentified <='2020-03-31'");
				$offerednj=mysql_num_rows($offerednj);
				$resultnj= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like '%1534%' AND indexreg.dateidentified <= '2020-03-31'");
				$rownj = mysql_fetch_assoc($resultnj); 
				$sumnj = $rownj['Contacts'];
				$acceptnj=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Nathenje Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptnj=mysql_num_rows($acceptnj);
				$eligiblenj= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Nathenje Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblenj=mysql_num_rows($eligiblenj);
				$testvapnnj=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Nathenje Health Centre' AND datetested <='2020-03-31'");
				$testedvpnj=mysql_num_rows($testvapnnj);
				$reachednj=mysql_query("SELECT * FROM vapncontacts where Facility='Nathenje Health Centre' AND datetested <='2020-03-31'");
				$reachnj=mysql_num_rows($reachednj);
				$reacheeligiblenj=mysql_query("SELECT * FROM vapncontacts where Facility='Nathenje Health Centre' AND testresult <> 'Previous Positive on ART'AND datetested <='2020-03-31' ");
				$reachegnj=mysql_num_rows($reacheeligiblenj);
				$contactsposnj=mysql_query("SELECT * FROM vapncontacts where Facility='Nathenje Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactsnj=mysql_num_rows($contactsposnj);
				$testednathenje=mysql_query("SELECT * FROM contacts where facility='Nathenje Health Centre'AND datetested <='2020-03-31'");
				$testednj=mysql_num_rows($testednathenje);
				// 6 KCH querying data
				$selectkch=mysql_query("SELECT * FROM indexreg where facility='Kamuzu Central Hospital' AND dateidentified <='2020-03-31'");
				$totkch=mysql_num_rows($selectkch);
				$offeredkch=mysql_query("SELECT * FROM indexreg WHERE facility = 'Kamuzu Central Hospital' AND dateidentified <='2020-03-31'");
				$offeredkch=mysql_num_rows($offeredkch);
				$resultkch= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg,indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like'%1519%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowkch = mysql_fetch_assoc($resultkch); 
				$sumkch = $rowkch['Contacts'];
				$acceptkch=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Kamuzu Central Hospital' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptkch=mysql_num_rows($acceptkch);
				$eligiblekch= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Kamuzu Central Hospital'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblekch=mysql_num_rows($eligiblekch);
				$testvapnkch=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Kamuzu Central Hospital' AND datetested <='2020-03-31'");
				$testedvpkch=mysql_num_rows($testvapnkch);
				$reachedkch=mysql_query("SELECT * FROM vapncontacts where Facility='Kamuzu Central Hospital' AND datetested <='2020-03-31'");
				$reachkch=mysql_num_rows($reachedkch);
				$reacheeligiblekch=mysql_query("SELECT * FROM vapncontacts where Facility='Kamuzu Central Hospital' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reachegkch=mysql_num_rows($reacheeligiblekch);
				$contactsposkch=mysql_query("SELECT * FROM vapncontacts where Facility='Kamuzu Central Hospital' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactskch=mysql_num_rows($contactsposkch);
				$testedkch=mysql_query("SELECT * FROM contacts where facility='Kamuzu Central Hospital' AND datetested <='2020-03-31'");
				$testedkc=mysql_num_rows($testedkch);
				
				// 7 Mitundu Querying data
				$selectmt=mysql_query("SELECT * FROM indexreg where facility='Mitundu Rural Hospital' AND dateidentified <='2020-03-31'");
				$totmt=mysql_num_rows($selectmt);
				$offeredmt=mysql_query("SELECT * FROM indexreg WHERE facility = 'Mitundu Rural Hospital' AND dateidentified <='2020-03-31'");
				$offeredmt=mysql_num_rows($offeredmt);
				$resultmt= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like'%1530%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowmt = mysql_fetch_assoc($resultmt); 
				$summt = $rowmt['Contacts'];
				$acceptmt=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Mitundu Rural Hospital' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptmt=mysql_num_rows($acceptmt);
				$eligiblemt= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Mitundu Rural Hospital'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes'AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblemt=mysql_num_rows($eligiblemt);
				$testvapnmt=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Mitundu Rural Hospital'AND datetested <='2020-03-31'");
				$testedvpmt=mysql_num_rows($testvapnmt);
				$reachedmt=mysql_query("SELECT * FROM vapncontacts where Facility='Mitundu Rural Hospital'AND datetested <='2020-03-31'");
				$reachmt=mysql_num_rows($reachedmt);
				$reacheeligiblemt=mysql_query("SELECT * FROM vapncontacts where Facility='Mitundu Rural Hospital' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reachegmt=mysql_num_rows($reacheeligiblemt);
				$contactsposmt=mysql_query("SELECT * FROM vapncontacts where Facility='Mitundu Rural Hospital' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactsmt=mysql_num_rows($contactsposmt);
				$testedmitundu=mysql_query("SELECT * FROM contacts where facility='Mitundu Rural Hospital' AND datetested <='2020-03-31'");
				$testedmt=mysql_num_rows($testedmitundu);
				
				// 8 Lumbadzi Querying data
				$selectlu=mysql_query("SELECT * FROM indexreg where facility='Lumbadzi Health Centre'AND dateidentified <='2020-03-31'");
				$totlu=mysql_num_rows($selectlu);
				$offeredlu=mysql_query("SELECT * FROM indexreg WHERE facility = 'Lumbadzi Health Centre'AND dateidentified <='2020-03-31'");
				$offeredlu=mysql_num_rows($offeredlu);
				$resultlu= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like '%1521%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowlu = mysql_fetch_assoc($resultlu); 
				$sumlu = $rowlu['Contacts'];
				$acceptlu=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Lumbadzi Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptlu=mysql_num_rows($acceptlu);
				$eligiblelu= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Lumbadzi Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblelu=mysql_num_rows($eligiblelu);
				$testvapnlu=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Lumbadzi Health Centre' AND datetested <='2020-03-31'");
				$testedvplu=mysql_num_rows($testvapnlu);
				$reachedlu=mysql_query("SELECT * FROM vapncontacts where Facility='Lumbadzi Health Centre' AND datetested <='2020-03-31'");
				$reachlu=mysql_num_rows($reachedlu);
				$reacheeligiblelu=mysql_query("SELECT * FROM vapncontacts where Facility='Lumbadzi Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reacheglu=mysql_num_rows($reacheeligiblelu);
				$contactsposlu=mysql_query("SELECT * FROM vapncontacts where Facility='Lumbadzi Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactslu=mysql_num_rows($contactsposlu);
				$testedlumbadzi=mysql_query("SELECT * FROM contacts where facility='Lumbadzi Health Centre' AND datetested <='2020-03-31'");
				$testedlu=mysql_num_rows($testedlumbadzi);
				// 9 Area 18 querying data
				$select18=mysql_query("SELECT * FROM indexreg where facility='Area 18 Health Centre' AND dateidentified <='2020-03-31'");
				$tot18=mysql_num_rows($select18);
				$offered18=mysql_query("SELECT * FROM indexreg WHERE facility = 'Area 18 Health Centre'AND dateidentified <='2020-03-31'");
				$offered18=mysql_num_rows($offered18);
				$result18= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like '%1501%' AND indexreg.dateidentified <= '2020-03-31'");
				$row18 = mysql_fetch_assoc($result18); 
				$sum18 = $row18['Contacts'];
				$accept18=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Area 18 Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totaccept18=mysql_num_rows($accept18);
				$eligible18= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Area 18 Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes'AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligible18=mysql_num_rows($eligible18);
				$testvapn18=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Area 18 Health Centre' AND datetested <='2020-03-31'");
				$testedvp18=mysql_num_rows($testvapn18);
				$reached18=mysql_query("SELECT * FROM vapncontacts where Facility='Area 18 Health Centre'AND datetested <='2020-03-31'");
				$reach18=mysql_num_rows($reached18);
				$reacheeligible18=mysql_query("SELECT * FROM vapncontacts where Facility='Area 18 Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reacheg18=mysql_num_rows($reacheeligible18);
				$contactspos18=mysql_query("SELECT * FROM vapncontacts where Facility='Area 18 Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontacts18=mysql_num_rows($contactspos18);
				$testedarea18=mysql_query("SELECT * FROM contacts where facility='Area 18 Health Centre' AND datetested <='2020-03-31'");
				$tested18=mysql_num_rows($testedarea18);
				// 10 Area 25 querying data
				$select25=mysql_query("SELECT * FROM indexreg where facility='Area 25 Health Centre' AND dateidentified <='2020-03-31'");
				$tot25=mysql_num_rows($select25);
				$offered25=mysql_query("SELECT * FROM indexreg WHERE facility = 'Area 25 Health Centre' AND dateidentified <='2020-03-31'");
				$offered25=mysql_num_rows($offered25);
				$result25= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg,indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like '%1502%' AND indexreg.dateidentified <= '2020-03-31'");
				$row25 = mysql_fetch_assoc($result25); 
				$sum25 = $row25['Contacts'];
				$accept25=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Area 25 Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totaccept25=mysql_num_rows($accept25);
				$eligible25= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Area 25 Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligible25=mysql_num_rows($eligible25);
				$testvapn25=mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility='Area 25 Health Centre' AND datetested <='2020-03-31'");
				$testedvp25=mysql_num_rows($testvapn25);
				$reached25=mysql_query("SELECT * FROM vapncontacts where Facility='Area 25 Health Centre' AND datetested <='2020-03-31'");
				$reach25=mysql_num_rows($reached25);
				$reacheeligible25=mysql_query("SELECT * FROM vapncontacts where Facility='Area 25 Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31'");
				$reacheg25=mysql_num_rows($reacheeligible25);
				$contactspos25=mysql_query("SELECT * FROM vapncontacts where Facility='Area 25 Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontacts25=mysql_num_rows($contactspos25);
				$testedarea25=mysql_query("SELECT * FROM contacts where facility='Area 25 Health Centre'AND datetested <='2020-03-31'");
				$tested25=mysql_num_rows($testedarea25);
				
				// 11 Kawale querying data
				$selectkw=mysql_query("SELECT * FROM indexreg where facility='Kawale Health Centre'AND dateidentified <='2020-03-31'");
				$totkw=mysql_num_rows($selectkw);
				$offeredkw=mysql_query("SELECT * FROM indexreg WHERE facility = 'Kawale Health Centre' AND dateidentified <='2020-03-31'");
				$offeredkw=mysql_num_rows($offeredkw);
				$resultkw= mysql_query("SELECT count(indexcontacts.indexnum) AS Contacts  FROM indexreg, indexcontacts Where indexreg.indexnum = indexcontacts.indexnum
				AND indexcontacts.indexnum like'%1517%' AND indexreg.dateidentified <= '2020-03-31'");
				$rowkw = mysql_fetch_assoc($resultkw); 
				$sumkw = $rowkw['Contacts'];
				$acceptkw=(mysql_query("SELECT * FROM indexreg WHERE facility = 'Kawale Health Centre' AND totcontacts >0 AND dateidentified <='2020-03-31'")); 
				$totacceptkw=mysql_num_rows($acceptkw);
				$eligiblekw= (mysql_query("SELECT consent FROM indexreg, indexcontacts WHERE facility = 'Kawale Health Centre'
				AND indexreg.indexnum = indexcontacts.indexnum AND indexcontacts.consent ='Yes' AND indexreg.dateidentified <='2020-03-31'" ));
				$toteligiblekw=mysql_num_rows($eligiblekw);
				$testedkw=mysql_query("SELECT * FROM contacts where facility='Kawale Health Centre' AND datetested <='2020-03-31'");
				$testedkw=mysql_num_rows($testedkw);
				$reachedkw=mysql_query("SELECT * FROM vapncontacts where Facility='Kawale Health Centre' AND datetested <='2020-03-31'");
				$reachkw=mysql_num_rows($reachedkw);
				$reacheeligiblekw=mysql_query("SELECT * FROM vapncontacts where Facility='Kawale Health Centre' AND testresult <> 'Previous Positive on ART' AND datetested <='2020-03-31' ");
				$reachegkw=mysql_num_rows($reacheeligiblekw);
				$contactsposkw=mysql_query("SELECT * FROM vapncontacts where Facility='Kawale Health Centre' AND testresult = 'New positive' AND datetested <='2020-03-31'");
				$poscontactskw=mysql_num_rows($contactsposkw);
				$testedvapnkw= (mysql_query("SELECT * FROM vapncontacts where testresult <> 'Refused HIV test'AND testresult <> 'Previous Positive on ART' AND Facility ='Kawale Health Centre' AND datetested <='2020-03-31'" ));
				$testedvpkw=mysql_num_rows($testedvapnkw);
								?>
				<center>  			
				<table width="60%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Identfied</font></td><td><font size ="+1"><b>Offered</font></td>
<td><font size ="+1"><b>Accepted</font></td><td><font size= "+1"><b>Total Contacts</font></td><td><font size= "+1"><b>Eligible for Follow-up</font></td>
<td><font size= "+1"><b>Reached Contacts</font></td><td><font size= "+1"><b>Eligible for Testing</font></td><td><font size= "+1"><b>Tested VAPN</font></td><td><font size= "+1"><b>Tested Positive</font></td><td><font size= "+1"><b>Tested(FRS)</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chileka</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totindexreg</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredck</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totaccept</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sum</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$toteligible</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachedck</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegck</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$testedvp</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$poscontactsck</font></td><td><font size='+1'color ='red' >&nbsp;&nbsp;&nbsp;<b>$testedck</font></td></tr> ";
 //2 Bwaila
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Bwaila</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totibwaila</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredbw</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptbw</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumbw</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$toteligiblebw</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachedbw</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegbw</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpbw</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$poscontactsbw</font></td><td><font size ='+1'color ='red'>&nbsp;&nbsp;&nbsp;<b>$testedbw</font></td></tr> ";
 //3 Chitedze
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Chitedze</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totcz</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredcz</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptcz</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumcz</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$toteligiblecz</font></td><td>
  <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachedcz</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegcz</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpcz</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactscz</font></td><td><font size ='+1'color='red'>&nbsp;&nbsp;&nbsp;<b>$testedcz</font></td></tr> ";
 //4 Lighthouse
  echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lighthouse</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totlh</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredlh</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptlh</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumlh</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblelh</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachlh</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reacheglh</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvplh</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactslh</font></td><td><font size ='+1' color ='red'>&nbsp;&nbsp;&nbsp;<b>$testedlh</font></td></tr> ";
 //5 Nathenje
  echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Nathenje</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totnj</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offerednj</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptnj</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumnj</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblenj</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachnj</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegnj</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpnj</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactsnj</font></td><td><font size ='+1'color ='red'>&nbsp;&nbsp;&nbsp;<b>$testednj</font></td></tr> ";
 // 6 Mitundu
  echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Mitundu</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totmt</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredmt</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptmt</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$summt</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblemt</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachmt</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegmt</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpmt</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactsmt</font></td><td><font size ='+1' color='red'>&nbsp;&nbsp;&nbsp;<b>$testedmt</font></td></tr> ";
 //7 Lumbadzi
  echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Lumbadzi</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totlu</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredlu</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptlu</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumlu</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblelu</font></td><td>
  <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachlu</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reacheglu</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvplu</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactslu</font></td><td><font size ='+1' color='red'>&nbsp;&nbsp;&nbsp;<b>$testedlu</font></td></tr> ";
 //8 Area 18
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>Area 18</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$tot18</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offered18</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totaccept18</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sum18</font></td><td>&nbsp;&nbsp;&nbsp;$toteligible18</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reach18</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reacheg18</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvp18</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontacts18</font></td><td><font size ='+1'color ='red'>&nbsp;&nbsp;&nbsp;<b>$tested18</font></td></tr> ";
 // 9 Area 25
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Area 25</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$tot25</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offered25</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totaccept25</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sum25</font></td><td>&nbsp;&nbsp;&nbsp;$toteligible25</font></td><td>&nbsp;&nbsp;&nbsp;$testedvp25</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reach25</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reacheg25</font></td><td>
<font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontacts25</font></td><td><font size ='+1' color='red'>&nbsp;&nbsp;&nbsp;<b>$tested25</font></td></tr> ";
 
 // 10 KCH
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;K C H</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totkch</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredkch</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptkch</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumkch</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblekch</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachkch</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegkch</font></td><td>
 <font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpkch</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactskch</font></td><td><font size ='+1'color='red'>&nbsp;&nbsp;&nbsp;<b>$testedkc</font></td></tr> ";
 
 // 11 Kawale
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Kawale</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totkw</font></td>
 <td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredkw</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totacceptkw</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumkw</font></td><td>&nbsp;&nbsp;&nbsp;$toteligiblekw</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachkw</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegkw</font></td><td>
<font size ='+1'>&nbsp;&nbsp;&nbsp;$testedvpkw</font></td><td><font size ='+1'>&nbsp;&nbsp;&nbsp;$poscontactskw</font></td><td><font size ='+1' color='red'>&nbsp;&nbsp;&nbsp;<b>$testedkw</font></td></tr> ";
 ?>
							</td></tr>	
							<tr><td><br><br>
							<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>
							<br><br></td><td></td><td></td><td><p><a href = "index.php"class="btn" style="background-color: red">Cancel </a></p>
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
