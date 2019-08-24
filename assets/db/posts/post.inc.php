<?php
/**
 * Post
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class Post extends Database {
    /**
     *
     * Gets all the posts from the database
     *
     * @return string array
     */
    protected function GetAllPosts() {
        $sql = "SELECT * FROM `posts`";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "No results found!";
        }
    }

    /**
     *
     */
    protected function CreatePost($author_id, $post_title, $post_content, $created_date, $required_lvl) {
        $sql = "INSERT INTO `posts` (id, author_id, post_title, post_content, created_date, last_updated, required_lvl) VALUES (NULL, '$author_id', '$post_title', '$post_content', '$created_date', NULL, '$required_lvl')";

        if($this->connect()->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}

?>