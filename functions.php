<?php



require_once('session.php');


//var_dump($session->msg('s','Successful sent!'));

if(isset($_POST['submit']))
{
	send_email();
} 


function send_email()

{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$user_message = $_POST['message'];


	
    $to = "inno.mtui@tipatone.co.tz";
         $subject = "Free consultation request";
         
         $message = "Hello, Iam  Requesting for <b>{$topic}. </b> <br />";
         $message .="<p>{$user_message}</p><br />";
         $message .="Regards,<br>";
         $message .= "{$first_name} {$last_name},<br>";
         $message .="{$email}, <br>";
         $message .="{$phone}";
       
         
         $header = "From: info@tipatone.co.tz \r\n";
      //  $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
        //  if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }
        
          //$session->msg('s','Successful sent!');
         
         header("location:index.php#form_data");

}

