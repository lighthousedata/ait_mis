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
$selectallpatients=mysql_query("SELECT * FROM reachedContacts");
$numrows=mysql_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
      $selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE contactno LIKE '%$reportvalue%'");
      $numrows=mysql_num_rows($selectallpatients);
	  }
 }else if($reportterm=='facility'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE facility LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='contactno'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE contactno LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='testresult'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE testresult LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}else if($reportterm=='hivstatus'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE hivstatus LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}else if($reportterm=='finoutcome'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE finoutcome LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}else if($reportterm=='gender'){
$selectallpatients=mysql_query("SELECT * FROM reachedContacts WHERE gender LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
}
}?><center>
<table bgcolor="#666666" width="80%" border="0">
<tr><td></td><td>&nbsp;</td><td>&nbsp;</td><td>
<form method="post" action=""><label><font size= "+1"><b>Selection creteria: &nbsp;</font></label><select name='reportby'  style="width:30x">
     <option selected="selected" value="none" >All</option>
     <option value ="facility" >Facility</option>
	 <option value ="contactno" >Contact Number</option>
	 <option value ="testresult" >Teste Results</option>
	 <option value ="gender" >Gender</option>
     </select>
<input name="reportterm" type="text" size="20" placeholder="Enter value" />
<input name="reportdata" type="submit" value="Go"/>
</form></td></tr></table>
<table width="80%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Facility</font></td><td><font size= "+1"><b>Contact Number</font></td><td><font size= "+1"><b>Age</font></td><td><font size= "+1"><b>Gender</font>
</td><td><font size= "+1"><b>Test Results</font></td><td><font size= "+1"><b>Date tested</font></td><td><font size= "+1"><b>Action</font></td></tr> 
 <?php
 if($numrows=='0')
 { 
 
 }
 {
  {
	echo '';  
 while($selected=mysql_fetch_array($selectallpatients))
 {  $uniqueid=$selected['contactno'];
 	$facility=$selected['Facility'];
 	$contactno=$selected['contactno'];
	$age=$selected['age'];
	$gender=$selected['gender'];
	$htsno=$selected['htsno'];
	$datetested=$selected['datetested'];
	$testresult=$selected['testresult'];
	
	//value bar
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>$facility</font></td><td>&nbsp;&nbsp;&nbsp;<font size= '+1'>$contactno</font></td><td><font size= '+1'>$age</font></td><td><font size= '+1'>$gender</font>
 </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size= '+1'>$testresult</font></td><td><font size= '+1'>$datetested</font></td><td>&nbsp;&nbsp;<a href='editreachedContacts.php?editclientid=$uniqueid'>Edit</font></td></tr> ";
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