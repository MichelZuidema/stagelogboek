<?php
require_once '../database.class.php';
require_once '../posts/post.inc.php';
require_once '../posts/postAction.inc.php';
require_once '../users/user.inc.php';
require_once '../users/userAction.inc.php';
require_once '../functions.php';

$postAction = new postAction();
$userAction = new userAction();
$posts = $postAction->ShowAllPosts();

if(isset($_SESSION['username'])) {
    foreach ($posts as $id => $post) {
        $author_name = $userAction->ShowUserDetails($post['author_id'])[0]['naam'];
        $author_id = numhash($userAction->ShowUserDetails($post['author_id'])[0]['id']);

        if($_SESSION['userlevel'] >= $post['required_lvl']) {
            echo "<section class='post'>";
            echo "<h2>" . $post['post_title'] . "</h2>";

            if($post['created_date'] != $post['last_updated'] && !empty($post['last_updated'])) {
                if($_SESSION['userlevel'] >= 2 OR $author_id == $_SESSION['userlevel']) {
                    echo "<p class='p_time_author' style='float: right;'><a href='#'>Update</a></p>";
                }
                echo "<p class='p_time_author'>" . $post['created_date'] . ", <b>UPDATED AT " . $post['last_updated'] . "</b> <a href='profile.php?id=" . $author_id . "'>" . $author_name . "</a></p>";
            } else {
                if($_SESSION['userlevel'] >= 2 OR $author_id == $_SESSION['userlevel']) {
                    echo "<p class='p_time_author' style='float: right;'><a href='#'>Update</a></p>";
                }
                echo "<p class='p_time_author'>" . $post['created_date'] . ", <a href='profile.php?id=" . $author_id . "'>" . $author_name . "</a></p>";
            }

            echo "<p class='content'>" . $post['post_content'] . "</p>";
            echo "</section>";
        }
    }
}

?>