<?php
require_once '../database.class.php';
require_once '../users/user.inc.php';
require_once '../users/userAction.inc.php';

$user = new userAction();

if($user->LoginUser($_POST['username'], $_POST['password'])) {
    echo "OK";
} else {
    echo "Uw naam of wachtwoord is verkeerd!";
}

?>