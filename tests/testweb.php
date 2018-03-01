<?php

require "../vendor/autoload.php";

use Hichxm\SessionManager\Session\DATABASE_SessionManager;
use Hichxm\SessionManager\SessionManager;

$session_method = new DATABASE_SessionManager([
    "type" => "mysql",
    "name" => "sessionmanager",
    "server" => "127.0.0.1",
    "port" => 3306,
    "username" => "root",
    "password" => ""
]);
$session = new SessionManager($session_method);
$session->start();
$session->set("test", 1234);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<?php
dump($_COOKIE);
dump($session->bridge->session);
$session->stop();
?>
</body>
</html>