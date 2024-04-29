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
 
  	<h2>List of Index clients </h2>
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
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
         
<?php
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified between '$fdate' and '$tdate' ");
$numrows=mysql_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified between '$fdate' and '$tdate'  ");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
      $selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified between '$fdate' and '$tdate' ");
      $numrows=mysql_num_rows($selectallpatients);
	  }
 }else if($reportterm=='facility'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE facility LIKE '%$reportvalue%' AND dateidentified between '$fdate' and '$tdate' ");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='gender'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE gender ='$reportvalue'AND dateidentified between '$fdate' and '$tdate' ");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='indexnum'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE indexnum LIKE '%$reportvalue%' AND dateidentified between '$fdate' and '$tdate' ");
$numrows=mysql_num_rows($selectallpatients);
}
}?><center>
<table bgcolor="#666666" width="90%" border="0">
<td>&nbsp;</td><td>&nbsp;</td><td>
<form method="post" action=""><label><font size= "+1"style ="width:40%"><b>Report By: &nbsp;</font></label><select name='reportby'  style="width:40%">
     <option selected="selected" value="none"style="width:40%" >All</option>
     <option value ="facility" >Facility</option>
	 <option value ="indexnum" >Index number</option>
	  <option value ="gender" >Gender</option>
     </select>
<input name="reportterm" type="text" size="20" placeholder="Enter value" />
<input name="reportdata" type="submit" value="Go"/>
</form></td>

<table width="90%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Index Number</font></td><td><font size ="+1"><b>Date Identified</font></td><td>
<font size ="+1"><b>Gender</font></td><td><font size= "+1"><b>Age</font></td><td><font size= "+1"><b>Index category</font></td><td><font size= "+1"><b>Entry point</font></td><td><font size= "+1"><b>update</font></td><td><font size= "+1"><b>Add contacts</font></td></tr> 
 <?php
 if($numrows=='0')
 { 
 
 }
 {
  {
	echo '';  
 while($selected=mysql_fetch_array($selectallpatients))
 {  
 	$uniqueid=$selected['indexnum'];
 	$facility=$selected['facility'];
	$dateidentified=$selected['dateidentified'];
	$gender=$selected['gender'];
	$age=$selected['age'];
	$category=$selected['category'];
	$source=$selected['source'];
	//$eligibles=$selected['eligibles'];
	$indexnum=$selected['indexnum'];
	//value bar
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>$facility</font></td><td>&nbsp;&nbsp;&nbsp;<font size= '+1'>$indexnum</font></td><td><font size= '+1'>$dateidentified</font></td><td><font size= '+1'>$gender</font></td><td><font size= '+1'>$age</font>
 </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$category</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$source</font></td><td>&nbsp;&nbsp;<a href='edit_index.php?editclientid=$uniqueid'>Edit</font>
 </td><td>&nbsp;&nbsp;<a href='indexcontacts.php?editclientid=$uniqueid'>add Contacts</font></td></tr> ";
  }
  }
  }
}
 ?>
 </table>
 <br />
<table> <tr><td><br /><br />
 <a href = "index.php"class="staff-button">Cancel</a>
</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><br /><br />
 <!--<input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"> -->
 </div>
		</td></tr></table>
                     </div>
                   </div>           
                </div> 
            </div>
        </div>   
</div>				     