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
 
  	<h2>Elicited Contacts age and sex disagregation per facility</h2>
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
	<div class="col-lg-12">
				<?php
				// 1 Tisungane querying date
				
				$eligibleck1= mysql_query("SELECT sum(eligibles) AS Eligible  FROM indexdetails Where age <15 AND gender ='Female' AND  facility = 'Tisungane' AND dateidentified between '$fdate' and '$tdate' ");
				$ckeligible1 = mysql_fetch_assoc($eligibleck1); 
				$fck1 = $ckeligible1['Eligible'];
				
				$eligibleck2= mysql_query("SELECT sum(eligibles) AS Eligible  FROM indexdetails Where age <15 AND gender ='Male' AND  facility = 'Tisungane' AND dateidentified between '$fdate' and '$tdate' ");
				$ckeligible2 = mysql_fetch_assoc($eligibleck2); 
				$mck1 = $ckeligible2['Eligible'];				
								
				$eligibleck3= mysql_query("SELECT sum(eligibles) AS Eligible  FROM indexdetails Where age >14 AND gender ='Female' AND  facility = 'Tisungane'AND dateidentified between '$fdate' and '$tdate'  ");
				$ckeligible3 = mysql_fetch_assoc($eligibleck3); 
				$fck2 = $ckeligible3['Eligible'];
				
				$eligibleck4= mysql_query("SELECT sum(eligibles) AS Eligible  FROM indexdetails Where age >14 AND gender ='Male' AND  facility = 'Tisungane'AND dateidentified between '$fdate' and '$tdate'  ");
				$ckeligible4 = mysql_fetch_assoc($eligibleck4); 
				$mck2 = $ckeligible4['Eligible'];
				
				
				?>
				<center>  			
				<table width="70%" border="0"><td><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> < 15yrs</font>
</td><td><font size ="+1"><b>Above 15 yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 Tisungane					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;Tisungane</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td></tr> ";
 
 
 
}?>
							</td></tr>	
							<tr><td><br><br>
							<!--<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>-->
							</td><td></td><td></td><td><p><a href = "quarterlyreports.php"class="btn" style="background-color: red">Cancel </a></p>
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
