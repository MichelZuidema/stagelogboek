<?php
require_once '../database.class.php';
require_once '../post/post.inc.php';
require_once '../post/postAction.inc.php';

$postAction = new postAction();

$author_id = htmlentities($_POST['author_id'], ENT_QUOTES);
$post_title = htmlentities($_POST['post_title'], ENT_QUOTES);
$post_content = htmlentities($_POST['post_content'], ENT_QUOTES);
$current_date = htmlentities($_POST['current_date'], ENT_QUOTES);
$required_lvl = htmlentities($_POST['required_lvl'], ENT_QUOTES);


if($postAction->CreateNewPost($author_id, $post_title, $post_content, $current_date, $required_lvl)) {
    echo "OK";
} else {
    echo "ERROR";
}

?>