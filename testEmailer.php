<?php


   include 'Emailer.php';
    //$myinputAddress = "";
	
	$newEmail = new Emailer(); //instantiate a new object/variable

	$newEmail->setSendTo("ksspicer@dmacc.edu \r\n");
    //$newEmail->setSendTo($myinputAddress);
	
	$newEmail->getSendTo();
		echo $newEmail->getSendTo(); 
		
	$newEmail->setSentFrom("ksspicer@dmacc.edu \r\n");
		echo $newEmail->getSentFrom();
	
	$newEmail->setEmailSubject("hello there");
		//echo $newEmail->getEmailSubject();
		
	$newEmail->setEmailMsg("My message");
		//echo $newEmail->getEmailMsg();
		
	$sentEmail = false;
	
	$sentEmail = $newEmail->sendEmail();  //create email
	
	if ($sentEmail = true) {
		echo "Thank you for contacting us."	;
	} else {
		echo "Mail not sent.";
	}
	
?>