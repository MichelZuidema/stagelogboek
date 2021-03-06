<?php

/**
 * User
 *
 * @subpackage Post
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class postAction extends Post
{
    /**
     *
     * Shows all posts
     *
     * @return string array
     */
    public function ShowAllPosts()
    {
        $datas = $this->GetAllPosts();

        return $datas;
    }

    /**
     *
     * Shows a specific post
     *
     * @param int $id
     * @return mixed
     */
    public function ShowPost($id)
    {
        $data = $this->GetPost($id);

        return $data;
    }

    /**
     *
     * Creates New Post
     * @param int $author_id
     * @param string $post_title
     * @param string $post_content
     * @param date $current_date
     * @param int $required_lvl
     * @return bool
     */
    public function CreateNewPost($author_id, $post_title, $post_content, $current_date, $required_lvl)
    {
        $data = $this->CreatePost($author_id, $post_title, $post_content, $current_date, $required_lvl);

        return $data;
    }
}

?>