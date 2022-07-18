<?php
if(isset($_POST['subscribe-email-btn'])){
   $email = $_POST['subscribe-email'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        
		
    }
  }
?>