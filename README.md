gae-php-explore
===============

Exploring running PHP on Google App Engine.

###Installing PHP 5.4 on Linux (Ubuntu 12.04)

Add this repository
```
sudo add-apt-repository ppa:ondrej/php5
```

Then update and upgrade, upgrade will automatically install latest 5.4.x version of PHP

```
sudo apt-get update
```

Then install
```
sudo apt-get install php5-cgi
```

Running your scripts, example:

```
google_appengine/dev_appserver.py --php_executable_path="/usr/bin/php-cgi" hello/
```

###Basics
First, I start off by following the [Getting Started Guide](https://developers.google.com/appengine/docs/php/gettingstarted/helloworld) provided by Google Developers.

###References
* [Getting Started Guide](https://developers.google.com/appengine/docs/php/gettingstarted/helloworld)
* http://googlecloudplatform.blogspot.com/2013/07/google-app-engine-hello-world-using.html