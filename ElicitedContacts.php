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
  	<h2>List of Contacts Elicited by Index Clients</h2>
	<?php
	$dateidentified=date('y/m/d');
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users where password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
          
<?php
$selectallpatients=mysql_query("SELECT * FROM indexcontacts");
$numrows=mysql_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
      $selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE indexnum LIKE '%$reportvalue%'");
      $numrows=mysql_num_rows($selectallpatients);
	  }
 }else if($reportterm=='consent'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE consent LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='contacate'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE contcate LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='indexnum'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE indexnum LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}else if($reportterm=='hivstatus'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE hivstatus LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}else if($reportterm=='finoutcome'){
$selectallpatients=mysql_query("SELECT * FROM indexcontacts WHERE finoutcome LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}
}?><center>
<table bgcolor="#666666" width="80%" border="0">
<tr><td></td><td>&nbsp;</td><td>&nbsp;</td><td>
<form method="post" action=""><label><font size= "+1"><b>Selection creteria: &nbsp;</font></label><select name='reportby'  style="width:30x">
     <option selected="selected" value="none" >All</option>
     <option value ="indexnum" >Facility</option>
	 <option value ="finoutcome" >outcome</option>
	 <option value ="indexnum" >Index Number</option>
	 <option value ="hivstatus" >HIV status</option>
     </select>
<input name="reportterm" type="text" size="20" placeholder="Enter value" />
<input name="reportdata" type="submit" value="Go"/>
</form></td></tr></table>
<table width="80%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Index Number</font></td><td><font size= "+1"><b>Consent</font></td><td><font size= "+1"><b>Type of Contact</font></td><td><font size= "+1"><b>Age</font>
</td><td><font size= "+1"><b>Gender</font></td><td><font size ="+1"><b>HIV Status</font></td><td><font size ="+1"><b>Final Outcome</font></td><td></font></td><td><font size= "+1"><b>Action</font></td></tr> 
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
 	$consent=$selected['consent'];
	$contcate=$selected['contcate'];
	$gender=$selected['gender'];
	$age=$selected['age'];
	$hivstatus=$selected['hivstatus'];
	$outcome=$selected['finoutcome'];
	//$eligibles=$selected['eligible'];
	$indexnum=$selected['indexnum'];
	//value bar
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>$indexnum</font></td><td>&nbsp;&nbsp;&nbsp;<font size= '+1'>$consent</font></td><td><font size= '+1'>$contcate</font></td><td><font size= '+1'>$age</font></td><td><font size= '+1'>$gender</font></td><td><font size= '+1'>$hivstatus</font>
 </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$outcome</font></td><td></td><td>&nbsp;&nbsp;<a href='editindexcontacts.php?editclientid=$uniqueid'>Edit</font></td></tr> ";
  }
  }
  }
 ?>
 </table>
 <br />
<table> <tr><td><br /><br />
 <a href = "managecontacts.php"class="staff-button">Cancel</a>
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