<?php

  // Require composer autoloader
  require __DIR__ . '/vendor/autoload.php';

  require __DIR__ . '/dotenv-loader.php';

  $auth0 = new \Auth0\SDK\Auth0(array(
    'domain'        => getenv('AUTH0_DOMAIN'),
    'client_id'     => getenv('AUTH0_CLIENT_ID'),
    'client_secret' => getenv('AUTH0_CLIENT_SECRET'),
    'redirect_uri'  => getenv('AUTH0_CALLBACK_URL')
  ));


  $userInfo = $auth0->getUser();

  if (!$userInfo) {
      // We have no user info
      // redirect to Login
      print_r($userInfo);
  } else {
      print_r($userInfo);
  }

?>
<html>
<head></head>
<body>
  test page
</body>
</html>