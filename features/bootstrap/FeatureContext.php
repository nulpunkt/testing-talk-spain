<?php

/**
 * Features context.
 * We simply "import" from MinkContext, which has lots of nice stuff
 */
class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
	/**
	 * @Given /^I am logged in as "([^"]*)" with password "([^"]*)"$/
	 */
	public function iAmLoggedInAsWithPassword($username, $password)
	{
		$this->visit('/auth/');
		$this->fillField('username', 'jsn@ordbogen.com');
		$this->fillField('password', 'test123');
		$this->pressButton('Log in');
	}
}
