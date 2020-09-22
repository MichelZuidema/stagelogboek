<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once 'database.class.php';
//require_once 'users/user.inc.php';
//require_once 'users/userAction.inc.php';
//require_once 'post/post.inc.php';
//require_once 'post/postAction.inc.php';
require_once 'requiredLevel/requiredLevel.inc.php';
require_once 'requiredLevel/requiredLevelAction.inc.php';

//$posts = new postAction();
//$users = new userAction();
$requiredLevels = new RequiredLevelAction();

echo "Yeet: " . "</br>";
echo '<pre>';
print_r($requiredLevels->showAllRequiredLevels());
?>