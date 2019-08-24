<?php
/**
 * User
 *
 * @subpackage Post
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class postAction extends Post {
    /**
     *
     * Shows all posts
     *
     * @return string array
     */
    public function ShowAllPosts() {
        $datas = $this->GetAllPosts();

        return $datas;
    }

    public function CreateNewPost($author_id, $post_title, $post_content, $current_date, $required_lvl) {
        $data = $this->CreatePost($author_id, $post_title, $post_content, $current_date, $required_lvl);

        return $data;
    }
}

?>