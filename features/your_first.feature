Feature: See Licenses
  In order to see my liceneses
  As a website user
  They need to be listed at my profile

  Scenario: Searching for a page that does exist
    Given I am logged in as "jsn@ordbogen.com" with password "test123"
    And I go to "/profile"
    Then I should see "Licenses"
	And I should see "Duden Verlag: German"
