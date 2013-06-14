<?php

class DictionaryUpdaterCron
{
	protected $dictionary;

    public function __construct($dictionary)
    {
		$this->dictionary = $dictionary;
    }

	public function run()
	{
		$ftp = new FtpClient();
		$sql = $ftp->fetchContents($dictionary->getPublisher().'/'.$dictionary->getId().'.sql');
		$database = new Database();
		$database->query($sql);

		$mail = new Mail();
		$mail->setReciever("cron@ordbogen.com");
		$mail->setSubject($dictionary->getId()." has been updated!");
		$mail->send();
	}
}
