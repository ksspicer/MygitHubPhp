<?php

class Emailer{
	
		private $sendTo="";
		private $sentFrom="";
		private $emailMsg="";
		private $emailSubject="";
		
	public function __construct()
	{
			
		
	}
	
	public function setSendTo($inSentTo)
	{
		$this->sendTo = $inSentTo;
		
	}
	
	public function setSentFrom($inSentFrom)
	{
		$this->sentFrom = $inSentFrom;
	}
	
	public function setEmailSubject($inEmailSubject)
	{
		$this->emailSubject = $inEmailSubject;
	}
	
	
	public function setEmailMsg($inEmailMs)
	{
		$inEmailMsg=htmlentities($inEmailMsg); //handles special characters
		$inEmailMsg=wordwrap($inEmailMsg,40,"\n"); //sentence length
		$this->emailMsg=$inEmailMsg; //store modified message
		
	}
	
	public function getSendTo()
	{
		return $this->sendTo;
	}
	
	public function getSentFrom()
	{
		return $this->sentFrom;
	}
	
	public function sendEmail()
	{
		$header="From: $this->sentFrom " . "\r\n";
	
	
	return mail($this->sentTo,$this->emailSubject,$this->emailMsg,$headers);
	}
}






?>