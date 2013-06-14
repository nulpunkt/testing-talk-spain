<?php

class Person
{
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $spouse;

	public function __construct($firstname, $lastname, $email, $spouse)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->spouse = $spouse;
	}

	public function getFullname()
	{
	    return $this->firstname.' '.$this->lastname;
	}

	public function setFirstname($firstname)
	{
	    $this->firstname = $firstname;
	}

	public function name($param)
	{
	    return null;
	}

	public function getSpouseName()
	{
	    return $this->spouse->getFullname();
	}

	public function sendBirthdayEmail($mailer)
	{
		$mailer->setEmail($this->email);
		$mailer->setBody('Happy birthday');
		$mailer->send();
	}
}
