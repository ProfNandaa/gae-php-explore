<?php

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
# Looks for current Google account session
$user = UserService::getCurrentUser();
if ($user) {
  echo 'Hello, ' . htmlspecialchars($user->getNickname());

  foreach($user as $key=>$value){
  	echo "<li><strong>$key</strong> : $value </li>";
  }

  echo "<pre>";
  var_dump($user);
  echo "</pre>";
}
else {
  header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}