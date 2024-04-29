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
<center> <body>
 
  	<h2>AIT CASCADE SUMMARY</h2>
	<hr >
		<form name="bwdatesdata" action="" method="post" action="">
  <table width="100%" height="117"  border="0">
<tr>
<th width="27%" height="63" scope="row">From Date :</th>
<td width="73%">
<input type="date" name="fdate" class="form-control" id="fdate">
    	</td>
  </tr>
  <tr>
    <th width="27%" height="63" scope="row">To Date :</th>
    <td width="73%">
    <input type="date" name="tdate" class="form-control" id="tdate"></td>
  </tr><tr>
    <th width="27%" height="63" scope="row"></th>
    <td width="73%">
    <button class="btn-primary btn" type="submit" name="submit">Submit</button>
  </tr>
</table>
     </form>
      </div>
    </div>
    <hr>
      <div class="row">
      <div class="col-xs-12">
  
  	
         <div class="col-lg-12">
		 <?php
if(isset($_POST['submit']))
{ 
$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
?>
<h3 style="padding-left: 100px;color:blue">Reporting Period: <td></td>  <?php echo $fdate?> to <?php echo $tdate?></h3>
		<hr >
		<div class="row">
				<?php
				// 1 querying date
				$selectchileka=mysql_query("SELECT * FROM indexreg WHERE dateidentified between '$fdate' and '$tdate' ");
				$totindexreg=mysql_num_rows($selectchileka);
				
				$identfiedck=mysql_query("SELECT * FROM indexreg WHERE dateidentified between '$fdate' and '$tdate' ");
				$offeredck=mysql_num_rows($identfiedck);
				
				$resultck= mysql_query("SELECT sum(elicitedcontacts) AS Contacts  FROM indexdetails WHERE dateidentified between '$fdate' and '$tdate' ");
				$rowck = mysql_fetch_assoc($resultck); 
				$sumck = $rowck['Contacts'];
				
				$acceptck=(mysql_query("SELECT * FROM indexreg where consent = 'Yes' AND dateidentified between '$fdate' and '$tdate' ")); 
				$totaccept=mysql_num_rows($acceptck);
				
				$eligibleck= mysql_query("SELECT sum(eligibles) AS Eligible  FROM indexdetails WHERE dateidentified between '$fdate' and '$tdate' ");
				$ckeligible = mysql_fetch_assoc($eligibleck); 
				$toteligible = $ckeligible['Eligible'];
				
				$testvpchileka=mysql_query("SELECT * FROM reachedcontacts  WHERE  outcome= 'New Negative' AND outcomedate between '$fdate' and '$tdate'  ");
				$testedvp=mysql_num_rows($testvpchileka);
												
				$reachedchileka=mysql_query("SELECT * FROM reachedcontacts WHERE outcomedate between '$fdate' and '$tdate'  ");
				$reachedck=mysql_num_rows($reachedchileka);
				
				$reacheeligiblechileka=mysql_query("SELECT * FROM reachedcontacts where outcome <> 'Previous Positive on ART' AND outcomedate between '$fdate' and '$tdate' ");
				$reachegck=mysql_num_rows($reacheeligiblechileka);
				
				$contactsposck=mysql_query("SELECT * FROM reachedcontacts  WHERE outcome = 'New positive' AND outcomedate between '$fdate' and '$tdate'  ");
				$poscontactsck=mysql_num_rows($contactsposck);
				
								
				
				
				$yield = $poscontactsck/($testedvp + $poscontactsck)*100; $yield = round($yield);
											
								?>
								
				<center>  			
				<table width="90%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>facility Name</font></td><td><font size= "+1"><b>Identfied</font></td><td><font size ="+1"><b>Offered</font></td>
<td><font size ="+1"><b>Accepted</font></td><td><font size= "+1"><b>Total Contacts</font></td><td><font size= "+1"><b>Eligible for Follow-up</font></td>
<td><font size= "+1"><b>Reached Contacts</font></td><td><font size= "+1"><b>Eligible for Testing</font></td><td><font size= "+1"><b>Tested Negative</font></td><td><font size= "+1"><b>Tested Positive</font></td><td><font size= "+1"><b>Yield</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Chileka					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;UFC</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totindexreg</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$offeredck</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$totaccept</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$sumck</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$toteligible</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachedck</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$reachegck</font></td><td>
 <fon tsize='1'>&nbsp;&nbsp;&nbsp;$testedvp</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$poscontactsck</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$yield</font>%</td></tr> ";
 

}				
 ?>
							</td></tr>	
							<tr><td><br><br>
							<!--<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>-->
							<br><br></td><td></td><td></td><td><p><a href = "quarterlyreports.php"class="btn" style="background-color: red">Cancel </a></p>
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
