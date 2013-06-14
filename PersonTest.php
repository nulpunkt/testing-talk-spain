<?php

require_once('MessageTypes.php');

class Persontest extends PHPUnit_Framework_TestCase
{
	public function testFullname()
	{
	    $p = new Person('Jesper', 'Nielsen', null, null);
		$this->assertSame('Jesper Nielsen', $p->getFullname());
	}
	
	public function testSetFirstname()
	{
	    $p = new Person('Jesper', 'Nielsen', null, null);
		$p->setFirstname('Lars');
		$this->assertSame('Lars Nielsen', $p->getFullname());
	}

	public function testGetSpouseName()
	{
	    $p = new Person('Anders', 'And', null, null);
	    $s = new Person('Andersine', 'And', null, $p);
		$this->assertSame('Anders And', $s->getSpouseName());
	}
	
	public function testSendBirthdayEmail()
	{
		$email = "anders@andeby.dk";
		$mailer = $this->getMailerMock($email);
	    $p = new Person(null, null, $email, $mailer);
	}

	protected function getMailerMock($email)
	{
		$mailer = $this->getMock('Mailer', array('setEmail', 'setBody', 'send'));
		$mailer->expects($this->any())
				->method('setEmail')
				->with($this->equalTo($email));
		$mailer->expects($this->any())
				->method('setBody');
		$mailer->expects($this->any())
				->method('send');
	}
}

