<?php

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
// [START user]
# Looks for current Google account session
$user = UserService::getCurrentUser();
// [END user]
// [START ifuser]
if ($user) {
  echo 'Hello, ' . htmlspecialchars($user->getNickname());
}
// [END ifuser]
// [START elseuser]
else {
  header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}
// [END elseuser]