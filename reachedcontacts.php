<?php require_once("includes/Connection.php"); ?>
<?php include("includes/form_functions.php"); ?>
<?php //include("includes/header.php"); ?>
<?php include('server.php') ?>
	
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<center> <body>
 
  	<h2>Age and Sex disagregated for Reached  Contacts</h2>
	<hr >
		<form name="bwdatesdata" action="" method="post" action="">
  <table width="100%" height="117"  border="0">
<tr>
<th width="40%" height="50" scope="row">Select start Date :</th>
<td width="73%">
<input type="date" name="fdate" class="form-control" id="fdate">
    	</td>
  </tr>
  <tr>
    <th width="40%" height="50" scope="row">Select end Date :</th>
    <td width="73%">
    <input type="date" name="tdate" class="form-control" id="tdate"></td>
  </tr><tr>
    <th width="27%" height="50" scope="row"></th>
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
	<?php
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysqli_query($db,"SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
         <div class="col-lg-12">
				<?php
				// 1 UFC querying date
				
				$select0=mysqli_query($db,"SELECT * FROM reachedcontacts where age <1 AND gender = 'Female' AND  outcomedate between '$fdate' and '$tdate' ");	
				 $fck0=mysqli_num_rows($select0);
				
				$select00=mysqli_query($db,"SELECT * FROM reachedcontacts where age <1 AND  facility = 'UFC' AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck0=mysqli_num_rows($select00);
				
				$select1=mysqli_query($db,"SELECT * FROM reachedcontacts where age between 1 and 4 AND gender = 'Female' AND  outcomedate between '$fdate' and '$tdate' ");	
				 $fck1=mysqli_num_rows($select1);
				
				$select2=mysqli_query($db,"SELECT * FROM reachedcontacts where age between 1 and 4  AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck1=mysqli_num_rows($select2);
				
				$select3=mysqli_query($db,"SELECT  * FROM reachedcontacts where age >4 AND age <10   AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck2=mysqli_num_rows($select3);
				
				$select4=mysqli_query($db,"SELECT * FROM reachedcontacts where age >4 AND age <10  AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck2=mysqli_num_rows($select4);
				
				$select5=mysqli_query($db,"SELECT * FROM reachedcontacts where age>9 AND age <15  AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck3=mysqli_num_rows($select5);
				
				$select6=mysqli_query($db,"SELECT * FROM reachedcontacts where age>9 AND age <15  AND gender ='Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck3=mysqli_num_rows($select6);
				
				
				$select7=mysqli_query($db,"SELECT * FROM reachedcontacts where age >14 AND age <20  AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck4=mysqli_num_rows($select7);
				
				$select8=mysqli_query($db,"SELECT * FROM reachedcontacts where age >14 AND age <20  AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck4=mysqli_num_rows($select8);
				
				$select9=mysqli_query($db,"SELECT * FROM reachedcontacts where age >19 AND age <25  AND gender = 'Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck5=mysqli_num_rows($select9);
				
				$select10=mysqli_query($db,"SELECT * FROM reachedcontacts where age >19 AND age <25  AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck5=mysqli_num_rows($select10);
				
				$select11=mysqli_query($db,"SELECT * FROM reachedcontacts where age >24 AND age <30  AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck6=mysqli_num_rows($select11);
				
				$select12=mysqli_query($db,"SELECT * FROM reachedcontacts where age >24 AND age <30 AND gender ='Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck6=mysqli_num_rows($select12);
				
				$select13=mysqli_query($db,"SELECT * FROM reachedcontacts where age >29 AND age <35  AND gender='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck7=mysqli_num_rows($select13);
				
				$select14=mysqli_query($db,"SELECT * FROM reachedcontacts where age >29 AND age <35  AND gender ='Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck7=mysqli_num_rows($select14);
				
				$select15=mysqli_query($db,"SELECT * FROM reachedcontacts where age >34 AND age <40  AND gender = 'Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck8=mysqli_num_rows($select15);
				
				$select16=mysqli_query($db,"SELECT * FROM reachedcontacts where age >34 AND age <40  AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck8=mysqli_num_rows($select16);
				
				$select17=mysqli_query($db,"SELECT * FROM reachedcontacts where age >39 AND age <45  AND gender = 'Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck9=mysqli_num_rows($select17);
				
				$select18=mysqli_query($db,"SELECT * FROM reachedcontacts where age >39 AND age <45  AND gender ='Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck9=mysqli_num_rows($select18);
				
				$select19=mysqli_query($db,"SELECT * FROM reachedcontacts where age >44 AND age <50  AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck10=mysqli_num_rows($select19);
				
				$select20=mysqli_query($db,"SELECT * FROM reachedcontacts where age >44 AND age <50 AND gender = 'Male'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck10=mysqli_num_rows($select20);
				
				$select21=mysqli_query($db,"SELECT * FROM reachedcontacts where age >49  AND gender ='Female'AND  outcomedate between '$fdate' and '$tdate' ");
				$fck11=mysqli_num_rows($select21);
				$select22=mysqli_query($db,"SELECT * FROM reachedcontacts where age >49 AND gender = 'MAle'AND  outcomedate between '$fdate' and '$tdate' ");
				$mck11=mysqli_num_rows($select22);
												
			?>
				<center>  			
				<table width="70%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Gender</font></td><td><font size= "+1"><b> < 1year </font></td><td><font size= "+1"><b>1 - 4 yrs</font>
</td><td><font size ="+1"><b>5-9yrs</font></td><td><font size ="+1"><b> 10-14 yrs</font></td><td><font size= "+1">
<b>15-19 yrs</font></td><td><font size= "+1"><b>20-24 yrs</font></td><td><font size= "+1"><b>25-29yrs</font></td><td><font size= "+1"><b>30-34yrs</font>
</td><td><font size= "+1"><b>34-39yrs</font></td><td><font size= "+1"><b>40-44yrs</font></td><td><font size= "+1"><b>45-49yrs</font>
</td><td><font size= "+1"><b>50+ yrs</font></td></tr> 
			<form action="" method="post"> 		                      
<?php		
//1 UFC					
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;UFC</font></td><td><font size= '+1'>&nbsp;Female</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck0</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$fck3</font></td><td>
 <font size= '+1'>&nbsp;&nbsp;&nbsp;$fck4</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck5</font></td></td>
 <td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck6</font><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck8</font>
 </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck9</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$fck11</font></td></tr> ";
 
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>&nbsp;</font></td><td><font size= '+1'>&nbsp;Male</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck0</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck1</font>
 </td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck2</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck3</font></td><td><font size= '+1'>&nbsp;&nbsp;&nbsp;$mck4
 </font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck5</font></td></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck6</font><td><fon tsize='1'>
 &nbsp;&nbsp;&nbsp;$mck7</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck8</font> </td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck9</font></td><td><fon tsize='1'>
 &nbsp;&nbsp;&nbsp;$mck10</font></td><td><fon tsize='1'>&nbsp;&nbsp;&nbsp;$mck11</font></td></tr> ";
 
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
