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
<body>
  <div class="header">
  	<h2>List of Index clients</h2>
	<?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
         
<?php
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified >'2022-02-28' AND dateidentified <'2022-06-01'");
$numrows=mysql_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified >'2022-02-28' AND dateidentified <'2022-06-01'");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
      $selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified >'2022-02-28' AND dateidentified <'2022-06-01'");
      $numrows=mysql_num_rows($selectallpatients);
	  }
 }else if($reportterm=='facility'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE facility dateidentified >'2022-02-28' AND dateidentified <'2022-06-01' ");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='gender'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE dateidentified >'2022-02-28' AND dateidentified <'2022-06-01' and gender like ='$reportvalue' ");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='indexnum'){
$selectallpatients=mysql_query("SELECT * FROM indexreg WHERE indexnum dateidentified >'2022-02-28' AND dateidentified <'2022-06-01' ");
$numrows=mysql_num_rows($selectallpatients);
}
}?><center>
<table bgcolor="#666666" width="70%" border="0">
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

<table width="80%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Index Number</font></td><td><font size ="+1"><b>Date Identified</font></td><td>
<font size ="+1"><b>Gender</font></td><td><font size= "+1"><b>Age</font></td><td><font size= "+1"><b>Index category</font></td><td><font size= "+1"><b>Entry point</font></td><td><font size= "+1"><b>Action</font></td></tr> 
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
 </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$category</font></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$source</font></td><td>&nbsp;&nbsp;<a href='edit_index.php?editclientid=$uniqueid'>Edit</font></td></tr> ";
  }
  }
  }
 ?>
 </table>
 <br />
<table> <tr><td><br /><br />
 <a href = "index.php"class="staff-button">Cancel</a>
</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><br /><br />
 <input type="button" class="prev-button"value="Previous" onClick="history.go(-1);">
 </div>
		</td></tr></table>
                     </div>
                   </div>           
                </div> 
            </div>
        </div>   
</div>				     