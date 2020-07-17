<?php
$users = file_get_contents('config/admins.json');
$users = json_decode($users);

if (isset($_SERVER['PHP_AUTH_USER'])) {
    for ($i = 0; $i < count($users); $i++) {
        if ($_SERVER['PHP_AUTH_USER'] !== $users[$i]->username || !password_verify($_SERVER['PHP_AUTH_PW'], $users[$i]->password)) {
            sendHeaders();
            exit;
        }
    }
} else {
    sendHeaders();
}

function sendHeaders()
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You need proper credentials to login!';
    exit;
}
