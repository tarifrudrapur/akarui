<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  
  
  //Email information
  $admin_email = "admin@akaruilabs.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  
  if($email != '' && $subject != '' && $comment != '') {
  

  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Success !');
        window.location.replace(\"contact.php\");
    </SCRIPT>";    
	
	} else {
	
	 echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('All Fields Required !');
        window.location.replace(\"contact.php\");
    </SCRIPT>";
	
	}
 } 
  
  
  //if "email" variable is not filled out, display the form
  else  {
echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Failed !');
        window.location.replace(\"contact.php\");
    </SCRIPT>"; 
 } 
  
  
  
  
?>