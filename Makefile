behat:
	bin/behat
selenium:
	java -jar vendor/claylo/selenium-server-standalone/selenium-server-standalone-*.jar -browser browserName=firefox,version=14,maxInstances=1
