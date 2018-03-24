<?php

	$mail_contact=$_GET['email'];
	$sujet=$_GET['sujet'];
	$message_contact=$_GET['message'];
	


     $headers ='From: '.$mail_contact.''."\n";
     $headers .='Reply-To: '.$mail_contact.''."\n";
     $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
     $headers .='Content-Transfer-Encoding: 8bit';
     mail('adelaidedonovan@gmail.com', $sujet, $message_contact, $headers); 
                
     header("Location: index.php?succes");
     

?>