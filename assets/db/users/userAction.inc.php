<?php
// The following line is needed because the login process goes through AJAX / jQuery
session_start();

/**
 * User
 *
 * @subpackage User
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class userAction extends User
{
    /**
     *
     * Shows all users
     *
     * @return string array
     */
    public function ShowAllUsers()
    {
        $datas = $this->GetAllUsers();

        return $datas;
    }

    /**
     *
     * Logs user in
     *
     * @param string $username login username
     * @param string $password login password
     * @return boolean
     */
    public function LoginUser($username, $password)
    {
        $userData = $this->LoginUserDetails($username);

        if (password_verify($password, $userData[0]['password'])) {
            $_SESSION['userid'] = $userData[0]['id'];
            $_SESSION['username'] = $userData[0]['naam'];
            $_SESSION['userlevel'] = $userData[0]['level'];

            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets details from a user with a specific id
     *
     * @param int $id user id
     * @return string array
     */
    public function ShowUserDetails($id)
    {
        $datas = $this->GetUserDetails($id);

        return $datas;
    }

    /**
     * Shows all posts from a user with a specific id
     * @param int $id user id
     * @return string array
     */
    public function ShowPostsOfUser($id)
    {
        $datas = $this->GetPostsWithId($id);

        return $datas;
    }
}

?>