<?php
require_once '../database.class.php';
require_once '../user.inc.php';
require_once '../userAction.inc.php';

$user = new userAction();

if($user->LoginUser($_POST['username'], $_POST['password'])) {
    echo "OK";
} else {
    echo "YEET";
}

?>