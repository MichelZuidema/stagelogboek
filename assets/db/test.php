<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//require_once 'database.class.php';
//require_once 'user.inc.php';
//require_once 'userAction.inc.php';
//
//$user = new userAction();
//$user->LoginUser("Michel", "jdasj");


echo password_hash("geheim", PASSWORD_DEFAULT);

?>