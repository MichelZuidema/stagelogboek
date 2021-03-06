<?php

/**
 * Post
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class Post extends Database
{
    /**
     *
     * Gets all the posts from the database
     *
     * @return string array
     */
    protected function GetAllPosts()
    {
        $sql = "SELECT * FROM `posts`";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "No results found!";
        }
    }

    /**
     *
     * Gets details from a specific post
     *
     * @param int $id
     * @return mixed
     */
    protected function GetPost($id)
    {
        $sql = "SELECT * FROM `posts` WHERE id = $id";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            $data = $result->fetch_assoc();

            return $data;
        } else {
            echo "No results found!";
        }
    }

    /**
     *
     * Creates New Post
     * @param int $author_id
     * @param string $post_title
     * @param string $post_content
     * @param int $required_lvl_id
     * @return bool
     */
    protected function CreatePost($author_id, $post_title, $post_content, $required_lvl_id)
    {
        // $sql = "INSERT INTO `posts` (id, author_id, post_title, post_content, created_date, last_updated, required_lvl) VALUES (NULL, '$author_id', '$post_title', '$post_content', '$created_date', NULL, '$required_lvl')";
        $sql = "INSERT INTO `post` (id, author_id, post_title, post_content, required_level_id, created_at, updated_at) VALUES (NULL, $author_id, '$post_title', '$post_content', $required_lvl_id, CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP())";

        if ($this->connect()->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}

?>