<?php
/**
 * User
 *
 * @subpackage User
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class userAction extends User {
    /**
     *
     * Shows all users
     *
     * @return string array
     */
    public function ShowAllUsers() {
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
    public function LoginUser($username, $password) {
        $userData = $this->LoginUserDetails($username);

        if(password_verify($password, $userData[0]['password'])) {
            return true;
        } else {
            return false;
        }
    }
}

?>