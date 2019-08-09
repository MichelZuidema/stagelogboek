<?php
/**
 * User
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class User extends Database {
    /**
     *
     * Gets all data from all the users
     *
     * @return string array
     */
    protected function GetAllUsers() {
        $sql = "SELECT * FROM `users`";
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
     * Gets details of log in user
     *
     * @param string $username login username
     * @return string array
     */
    protected function LoginUserDetails($username) {
        $sql = "SELECT * FROM `users` WHERE naam = '$username'";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $data[] = $row;

            return $data;
        } else {
            echo "No results found!";
        }
    }
}

?>