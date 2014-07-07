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

###Working with CloudSQL
Following guides: [Getting Started with Google Cloud SQL](https://developers.google.com/cloud-sql/docs/getting-started) and
[Using Google Cloud SQL with the App Engine PHP SDK](https://developers.google.com/appengine/docs/php/cloud-sql/)

Few things to note:
* Put my SQL file(s) in /xfiles folder and used ```source``` in MySQL Client
* 


###References
* [Getting Started Guide](https://developers.google.com/appengine/docs/php/gettingstarted/helloworld)
* http://googlecloudplatform.blogspot.com/2013/07/google-app-engine-hello-world-using.html