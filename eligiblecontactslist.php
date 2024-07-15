<?php 
// connect to the database
 require_once("includes/Connection.php"); ?>
 <?php include('server.php') ?>
 <?php //include('errors.php'); ?>
<?php //include("includes/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<center> <body>
 
  	<h2>List of Eligible contacts </h2>
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
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts where indexinterviewdate between '$fdate' and '$tdate' ");
$numrows=mysqli_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts where indexinterviewdate between '$fdate' and '$tdate' ");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
    $selectallpatients=mysqli_query($db,"SELECT * FROM contacts where indexinterviewdate between '$fdate' and '$tdate' ");
    $numrows=mysqli_num_rows($selectallpatients);
	  }
 }else if($reportterm=='facility'){
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts WHERE indexinterviewdate between '$fdate' and '$tdate'  AND facility LIKE '%$reportvalue%' ");
$numrows=mysqli_num_rows($selectallpatients);
 }else if($reportterm=='gender'){
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts WHERE indexinterviewdate between '$fdate' and '$tdate'  AND  gender LIKE '%$reportvalue%'");
$numrows=mysqli_num_rows($selectallpatients);
 }else if($reportterm=='outcome'){
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts WHERE indexinterviewdate between '$fdate' and '$tdate'  AND outcome LIKE '%$reportvalue%' ");
$numrows=mysqli_num_rows($selectallpatients);

}else if($reportterm=='contnum'){
$selectallpatients=mysqli_query($db,"SELECT * FROM contacts WHERE contnum LIKE '%$reportvalue%' ");
$numrows=mysqli_num_rows($selectallpatients);
 
 }/*else if($reportterm=='Facility'){
$selectallpatients=mysqli_query($db,"SELECT * FROM clients WHERE Facility LIKE '%$reportvalue%'");
$numrows=mysqli_num_rows($selectallpatients);
 }
 else if($reportterm=='graduation'){
$selectallpatients=mysqli_query($db,"SELECT * FROM clients WHERE age =>20'");
$numrows=mysqli_num_rows($selectallpatients);
 }*/
}?><center>
<table bgcolor="#666666" width="70%" border="0">
<tr><td></td><td>&nbsp;</td><td>&nbsp;</td><td>
<form method="post" action=""><label><font size= "+1"><b>Selection creteria: &nbsp;</font></label><select name='reportby'  style="width:30x">
     <option selected="selected" value="none" >All</option>
     <option value ="facility" >Facility</option>
	 <option value ="outcome" >Outcome</option>
	  <option value ="contnum" >Contact #</option>
	  <option value ="gender" >Gender</option>
     </select>
<input name="reportterm" type="text" size="15" placeholder="Enter value" />
<input name="reportdata" type="submit" value="Go"/>
</form></td></tr></table>
<table width="70%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Index vist date</font></td><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Contact Number</font>
</td><td><font size ="+1"><b>Gender</font></td><td><font size ="+1"><b>Age</font></td><td><font size ="+1"><b>IPV status</font></td><td><font size= "+1"><b>Action</font></td></tr> 
 <?php
 if($numrows=='0')
 { 
 
 }
 {
  {
	echo '';  
 while($selected=mysqli_fetch_array($selectallpatients))
 {  
 	$uniqueid=$selected['contnum'];
	$interview=$selected['indexinterviewdate'];
 	$facility=$selected['facility'];
	$gender=$selected['gender'];
	$age=$selected['age'];
	$ipvstatus=$selected['ipvstatus'];
	//$outcome=$selected['outcome'];
	$contnum=$selected['contnum'];
	//$outcomedate=$selected['outcomedate'];
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>$interview</font></td><td><font size= '+1'>$facility</font></td><td><font size= '+1'>$contnum</font></td><td><font size= '+1'>$gender</font></td><td>
 <font size= '+1'>$age</font></td><td><font size= '+1'>$ipvstatus</font></td><td>&nbsp;&nbsp;<a href='updateoutcomes.php?editclientid=$uniqueid'>update</font></td></tr> ";
		} 
	} 
}
}?>
 </table>
 <br />
<table> <tr><td><br /><br />
 <a href = "quarterlyreports.php"class="staff-button">Cancel</a>
</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><br /><br />
<!-- <input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"> -->
 </div>
		</td></tr></table>
                     </div>
                   </div>           
                </div> 
            </div>
        </div>   
</div>				     
