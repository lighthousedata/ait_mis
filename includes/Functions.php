<?php // this is where basic functions are stored
function mysql_prep($value){
$magic_quotes_active = get_magic_quotes_gpc();
$new_enough_php = function_exists( " mysql_real_escape_string" ); // i.e. PHP >v4.3.0
if ($new_enough_php){ // PHP v4.3.0 or higher
// undo any magic quote effects so mysql_real_escape_string can do the work
if (magic_quotes_active){$value = stripslashes($value);}
$value = mysql_real_escape_string($value);
}else{// before PHP v4.3.0 
	//if $magic quotes are not already on then add slashes manually
	//if(!magic_quotes_active){$value = addslashes($value);}
	// if magic quotes are active, then the slashes already exist
	}
	return $value;
}
	
	function redirect_to($location = null){
	if($location != null) {
	header("location:{$location}");
	exit;
		}
	}

	function confirm_query($result_set){
		if (!$result_set){
				die("database query failed: " . mysql_error());
				}
			}
	function get_all_news($public =true){
		global $connection;
			$query = "SELECT * 
					FROM news 
					ORDER BY position ASC"; 
				$new_set = mysql_query($query, $connection);
				confirm_query($new_set);
				return $new_set;
				}
	function get_pages_for_new($news_id){
		global $connection;
			$query = "SELECT * 
					FROM pages
					WHERE news_id ={$news_id}";
				$page_set = mysql_query($query, $connection);
				confirm_query($page_set);
				return $page_set;	
		}
	function get_new_by_id($new_id){
		global $connection;
		$query = "SELECT *
						FROM news 
						WHERE id= $new_id ";
	
		$result_set = mysql_query($query);
		confirm_query($result_set);
		//REMEMBER:
		// if no rows are returned, fetch_array will return false
		if($new = mysql_fetch_array($result_set)){
		return $new;
		} else{
		return null;
		}
	}
	function get_page_by_id($page_id){
	global $connection;
		$query = "SELECT *
						FROM pages 
						WHERE id=$page_id ";
		
		$result_set = mysql_query($query);
		confirm_query($result_set);
		//REMEMBER:
		// if no rows are returned, fetch_array will return false
		if($page = mysql_fetch_array($result_set)){
		return $page;
		} else{
		return null;
		}
	}
	function get_default_page($new_id){
	// get all visible pages
	$page_set = get_pages_for_new($new_id, true);
	if($first_page = mysql_fetch_array($page_set)){
		return $first_page;
		}else{
		return Null;
		}
	}
	function find_selected_page(){
			global $sel_new;
			global $sel_page;
		if(isset($_GET['new'])){
		$sel_new = get_new_by_id($_GET['new']);
		$sel_page = get_default_page($sel_page['id']);
		}elseif(isset($_GET['page'])){
		$sel_new = null;
		$sel_page = get_page_by_id($_GET['page']); 
		}else{
		$sel_new = null;
		$sel_page = null;
		}
	}
	
	function navigation($sel_new,$sel_page, $public = false){
		$output= "<ul class= \"news\">";
				// 3. perform database query		
				$new_set = get_all_news($public);
				// 4 use returned data
				while($new = mysql_fetch_array($new_set)){
				$output .= "<li";
				if($new["id"]== $sel_new['id']){
				$output .= "class=\"selected\"";
				}
				$output .= "><a href=\"edit_news.php?new=". urlencode($new["id"]) .
				"\">{$new["menu_name"]}</a></li>";
				
				$page_set = get_pages_for_new($new["id"]);
				// 4 use returned data
				$output .="<ul class=\"pages\">";
				while($page = mysql_fetch_array($page_set)){
				$output .= "<li";
				if($page["id"]== $sel_page['id']){
				$output .= "class=\"selected\"";
				}
				$output .= "><a href=\"edit_page.php?page=" .urlencode($page["id"]) .
				"\">{$page["menu_name"]}</a></li>";
				}
				$output .= "</ul>";
			}
			$output .= "</ul>";
			return $output;
	}
	function public_navigation($sel_new,$sel_page, $public = true){
		$output= "<ul class= \"news\">";	
		$news_set = get_all_news($public);
		while($new = mysql_fetch_array($news_set)){
				$output .= "<li";
				if($new["id"]== $sel_new['id']){
				$output .= "class=\"selected\""; }
				$output .= "><a href=\"index.php?new=". urlencode($new["id"]) .
					"\">{$new["menu_name"]}</a></li>";	
				if($new["id"]== $sel_new['id']){
					$page_set = get_pages_for_new($new["id"]);
					$output .="<ul class=\"pages\">";
					while($page = mysql_fetch_array($page_set)){
					$output .= "<li";
					if($page["id"]== $sel_page['id']){
					$output .= "class=\"selected\"";}
					$output .= "><a href=\"index.php?page=" .urlencode($page["id"]) .
						"\">{$page["menu_name"]}</a></li>";
				}
				$output .= "</ul>";
				}
			}
			$output .= "</ul>";
			return $output;
	}	
	function reg(){

if(isset($_POST['add']))


{
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$username=$_POST['user name'];
$password=$_POST['password'];



$insert=mysql_query("insert into users (First_Name,Last_Name,username,password)
                            	values ('$First_Name','$Last_Name',,'$username','$password') ") 
or die("User not added" . mysql_error());
								
	if($insert)
{
yes();
}
else
{
echo"failed to insert user";
}
}														
}
//function validate(){
//echo " <div class='green'>
//<p> required filled not filled!</p>
	//  </div> ";
//}
function addclient(){	
if(isset($_POST['submit']))


{	
	    $F_name = $_POST['First_Name'];
		$enrolmentdate=$_POST["Date_enrolled"];	
		$L_Name=$_POST["Last Name"];
		$PtID=$_POST["PtID"];	
		$artno = $_POST["artno"];
		$DOB =	$_POST["Date Of Birth"];
		$SEX=$_POST["SEX"];		
		$HIV_TD=$_POST["HIV_TD"];	
		$HIV_DD=$_POST["HIV_DD"];	
		$ART_Status=$_POST["ART_Status"];	
		$ART_SD=$_POST["ART_SD"];	
		$GroupNo=$_POST["GroupNo"];	
		$Guardian=$_POST["Guardian"];
		$address=$_POST["Address"];	
		$Phone=$_POST["Phone"];	
		$outcome=$_POST["Outcome"];	
		$outcomedate=$_POST["Outcome_date"];
		
			$F_name= mysql_real_escape_string(trim($F_name));
			$L_Name= mysql_real_escape_string(trim($L_Name));
			$PtID= mysql_real_escape_string(trim($PtID)); 
			$artno= mysql_real_escape_string(trim($artno)); 
			$enrolmentdate= mysql_real_escape_string(trim($enrolmentdate));  			
            $DOB= mysql_real_escape_string(trim(DOB)); 
            $SEX= mysql_real_escape_string(trim($SEX));  
			$HIV_TD= mysql_real_escape_string(trim($HIV_TD));  
			$HIV_DD= mysql_real_escape_string(trim($HIV_DD));  
			$ART_Status= mysql_real_escape_string(trim($ART_Status));  
			$ART_SD= mysql_real_escape_string(trim($ART_SD));  
			$GroupNo= mysql_real_escape_string(trim($GroupNo));  
			$Guardian= mysql_real_escape_string(trim($Guardian)); 
			$address= mysql_real_escape_string(trim($address));  			
			$Phone= mysql_real_escape_string(trim($Phone));  
			$outcome= mysql_real_escape_string(trim($outcome));  
			$outcomedate= mysql_real_escape_string(trim($outcomedate));  
			 
			
		if(empty($F_name)){
		validate();
		 }
		 elseif(empty($L_Name)){
		validate();
		 }
		 elseif(empty($PtID)){
		 validate();
		 }
		  elseif(empty($DOB)){
		 validate();
		 }
else{

        $query = "insert into clients 
				(PtID,Date_enrolled,F_name,L_Name,DOB,SEX, HIV_TD, HIV_DD, ART_Status,
				ART_SD, GroupNo, Guardian, Address, Phone, Outcome, Outcome_date)
				values('$PtID','$enrolmentdate','$F_name','$L_Name','$DOB','$SEX','$HIV_TD','$HIV_DD',
				'$ART_Status','$ART_SD','$GroupNo','$Guardian', '$Address','$Phone','$outcome',$outcomedate)";
        $results = mysql_query($query) or die(mysql_error());
		if($results){
		addtext();
		
		}
		else{
		addfail();
		 
		}
		}
         }
}
function editclient(){


if(isset($_POST['edit']))
{
          $PtID = $_POST['PtID'];
         $F_Name = $_POST['Name'];
		$L_Name=$_POST["L_Name"];
		$Address=$_POST["Address"];
		$DOB=$_POST["DOB"];
		    
			$id= mysql_real_escape_string(trim($id));
			$F_name= mysql_real_escape_string(trim($F_name));
			$L_Name= mysql_real_escape_string(trim($L_Name));
			$PtID= mysql_real_escape_string(trim($PtID));  
            $DOB= mysql_real_escape_string(trim(DOB)); 
            $SEX= mysql_real_escape_string(trim($SEX));  
			$HIV_TD= mysql_real_escape_string(trim($HIV_TD));  
			$HIV_DD= mysql_real_escape_string(trim($HIV_DD));  
			$ART_Status= mysql_real_escape_string(trim($ART_Status));  
			$ART_SD= mysql_real_escape_string(trim($ART_SD));  
			$GroupNo= mysql_real_escape_string(trim($GroupNo));  
			$Guardian= mysql_real_escape_string(trim($Guardian));  
			$Phone= mysql_real_escape_string(trim($Phone));  	   
			 
			
         $update= mysql_query("UPDATE Clients SET id='$id',F_Name='$F_Name', L_Name='$L_Name',PtID='$PtID',DOB='$DOB',SEX='$SEX',
		 HIV_TD='$HIV_TD', HIV_DD='$HIV_DD', ART_Status='$ART_Status',ART_SD='$ART_SD',
		 GroupNo='$GroupNo',Guardian='$Guardian',Address='$Address',Phone='$Phone'
		 WHERE ClientID='$ClientID'")or die (mysql_error());
         if($update){
		  editOK();
      
		   }
		   else{ 
		   editfailed();
		   }
}
}
function edituser(){


if(isset($_POST['edit']))
{		 $id = $_POST['id'];
         
		$usernamee=$_POST["username"];
		$passwordd=$_POST["password"];
		
		    
			$id= mysql_real_escape_string(trim($id));
			$usernamee= mysql_real_escape_string(trim($usernamee));  
			$passwordd= mysql_real_escape_string(trim($passwordd));  
			
			
			
         $update= mysql_query("UPDATE users SET username='$usernamee',password='$passwordd'
								
								WHERE 
								id='$id'")or die (mysql_error());
         if($update){
		  editOK();
      
		   }
		   else{ 
		   editfailed();
		   }
}
}
//------------------end edit function------------------------------------>
function delete(){

if(isset($_POST['delete']))
{
          $id= $_POST['id'];


        $delete= mysql_query("DELETE FROM clients WHERE id='$id'");
         if($delete){
		 
		echo "you have successfully deleted the client";
		}
		 else{
		 deletefail();
		 }
    }
}
function addtext(){
echo " <div class='green'>
<h2> client added successfully!</h2>
	  </div> ";
}
function addfail(){
echo " <div class='green'>
<p> Client not added!</p>
	  </div> ";
}


function yes(){
echo " <div class='green'>
<p> You have successfully register!  <a href='login.php'> <strong>Login</strong> </a></p>
	  </div> ";
}

function deleteOK(){
echo " <div class='green'>
<p> client deleted!</p>
	  </div> ";
}
function deletefail(){
echo " <div class='green'>
<p> failed to delete client!</p>
	  </div> ";
}
function editOK(){
echo " <div class='green'>
<h2> the client is modified!</h2>
	  </div> ";
}
function editfailed(){
echo " <div class='green'>
<p> fail to modify client!</p>
	  </div> ";
}

?>			