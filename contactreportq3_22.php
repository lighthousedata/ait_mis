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
  	<h2>List of Eligible Contacts</h2>
	<?php
	$currentyear=date('D/d/m/Y');
	echo"<font size='+1'>$currentyear</font>";
	$username=mysql_query("SELECT username from users WHERE password(?)");
	echo "<fontsize='+1'>$username</font>";
	?>
  </div>
         <div class="col-lg-12">

<?php
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE indexinterviewdate>'2022-05-31' AND indexinterviewdate<'2022-09-01' ");
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE indexinterviewdate>'2022-05-31' AND indexinterviewdate<'2022-09-01' ");
$numrows=mysql_num_rows($selectallpatients);
if(isset($_POST['reportdata'])){
 $reportterm=$_POST['reportby'];
$reportvalue=$_POST['reportterm'];
 
if($reportterm=='none'){
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE indexinterviewdate>'2022-05-31' AND indexinterviewdate<'2022-09-01'");
 }else if($reportterm=='year'){
	  $currentyear=date('Y');
	  if($reportvalue>$currentyear){
		  $msgyear="error";
		  $numrows=0;
	  } else{
    $selectallpatients=mysql_query("SELECT * FROM contacts WHERE indexinterviewdate>'2022-05-31' AND indexinterviewdate<'2022-09-01'");
    $numrows=mysql_num_rows($selectallpatients);
	  }
 }else if($reportterm=='facility'){
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE facility LIKE '%$reportvalue%' AND indexinterviewdate > '2022-05-31' AND indexinterviewdate<'2022-09-01' ");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='gender'){
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE gender LIKE '%$reportvalue%'AND indexinterviewdate > '2022-05-31' AND indexinterviewdate<'2022-09-01'");
$numrows=mysql_num_rows($selectallpatients);
 }else if($reportterm=='mode'){
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE mode LIKE '%$reportvalue%' AND indexinterviewdate > '2022-05-31' AND indexinterviewdate<'2022-09-01'");
$numrows=mysql_num_rows($selectallpatients);

}else if($reportterm=='contnum'){
$selectallpatients=mysql_query("SELECT * FROM contacts WHERE contnum LIKE '%$reportvalue%'AND indexinterviewdate > '2022-05-31' AND indexinterviewdate<'2022-09-01' ");
$numrows=mysql_num_rows($selectallpatients);
 
 }/*else if($reportterm=='Facility'){
$selectallpatients=mysql_query("SELECT * FROM clients WHERE Facility LIKE '%$reportvalue%'");
$numrows=mysql_num_rows($selectallpatients);
 }
 else if($reportterm=='graduation'){
$selectallpatients=mysql_query("SELECT * FROM clients WHERE age =>20'");
$numrows=mysql_num_rows($selectallpatients);
 }*/
}?><center>
<table bgcolor="#666666" width="80%" border="0">
<tr><td></td><td>&nbsp;</td><td>&nbsp;</td><td>
<form method="post" action=""><label><font size= "+1"><b>Selection creteria: &nbsp;</font></label><select name='reportby'  style="width:30x">
     <option selected="selected" value="none" >All</option>
     <option value ="facility" >Facility</option>
	 <option value ="mode" >mode</option>
	  <option value ="contnum" >Contact #</option>
	  <option value ="gender" >Gender</option>
     </select>
<input name="reportterm" type="text" size="15" placeholder="Enter value" />
<input name="reportdata" type="submit" value="Go"/>
</form></td></tr></table>
<table width="80%" border="0">
<tr bgcolor="#666666"><td><font size= "+1"><b>Index vist date</font></td><td><font size= "+1"><b>Facility Name</font></td><td><font size= "+1"><b>Contact Number</font>
</td><td><font size ="+1"><b>Gender</font></td><td><font size ="+1"><b>Age</font></td><td><font size ="+1"><b>IPV status</font></td><td><font size= "+1"><b>mode</font></td><td><font size= "+1"><b>Action</font></td></tr> 
 <?php
 if($numrows=='0')
 { 
 
 }
 {
  {
	echo '';  
 while($selected=mysql_fetch_array($selectallpatients))
 {  
 	$uniqueid=$selected['contnum'];
	$interview=$selected['indexinterviewdate'];
 	$facility=$selected['facility'];
	$gender=$selected['gender'];
	$age=$selected['age'];
	$ipvstatus=$selected['ipvstatus'];
	$mode=$selected['mode'];
	$contnum=$selected['contnum'];
 echo "<tr bgcolor='#FFFFFF'><td><font size= '+1'>$interview</font></td><td><font size= '+1'>$facility</font></td><td><font size= '+1'>$contnum</font></td><td><font size= '+1'>$gender</font></td><td>
 <font size= '+1'>$age</font></td><td><font size= '+1'>$ipvstatus</font></td><td><font size= '+1'>$mode</font></td><td>&nbsp;&nbsp;<a href='edit_contacts.php?editclientid=$uniqueid'>Edit</font></td></tr> ";
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