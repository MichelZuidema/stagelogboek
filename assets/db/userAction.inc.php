<?php

class userAction extends User {
    public function ShowAllUsers() {
        $datas = $this->GetAllUsers();

        foreach ($datas as $data) {
            echo $data['naam'] . "<br>";
            echo $data['level'] . "<br>";
        }
    }

    public function LoginUser($username, $password) {
        $userData = $this->LoginUserDetails($username);

        if(password_verify($password, $userData[0]['password'])) {
            echo "Password verified";
        } else {
            echo "Incorrect Password";
        }
    }
}

?>