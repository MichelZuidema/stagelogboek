<?php

class User extends Database {
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