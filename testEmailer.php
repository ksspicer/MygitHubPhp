<?php


   include 'Emailer.php';

	$newEmail = new Emailer(); //instantiate a new object/variable

	$newEmail->setSendTo("ksspicer@dmacc.edu");

	$newEmail->getSendTo();
		echo $newEmail->getSendTo(); 
		
	$newEmail->setSentFrom("ksspicer@dmacc.edu");
		echo $newEmail->getSentFrom();
	
	//$newEmail->setEmailSubject("kjshdfk");
		//echo $newEmail->getEmailSubject();
	
	$newEmail->sendEmail();  //create email
	
?>