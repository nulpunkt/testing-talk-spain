<?php

class DictionaryUpdaterCron implements CronJob
{
	protected $dictionary;

	public static function run($dictionary)
	{
		$sql = FtpClient::fetchContents($dictionary->getPublisher().'/'.$dictionary->getId().'.sql');
		Database::query($sql);

		mail('cron@ordbogen.com', $dictionary->getId()." has been updated!", '');
	}
}
