<?php

class SwitchQuery extends ConnectDatabase
{

    // Thêm dữ liệu user lên database
    public function InsertUser(object $obj)
    {
        try {
            // $this->connect->query("USE " . parent::DB_NAME);
            $sql = "INSERT INTO `users` (`users_id`, `name`, `username`, `password`, `email`, `phone`, `action`, `ban`) VALUES (NULL, '$obj->name', '$obj->username', '$obj->password', '$obj->email', '$obj->phone', '0', '0')";
            $dataCheck = $this->connect->exec($sql);
            return $dataCheck;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    // Logic Kiểm tra tài khoản mật khẩu khi đổ về theo iduser
    public function Login($iduser)
    {
        try {
            $sql = "SELECT users_id,email, username, password FROM `users` WHERE username like '%$iduser%'";
            $this->connect->query("USE " . parent::DB_NAME);
            $dataCheck = $this->connect->query($sql)->fetch();
            if ($dataCheck != false) {
                $userLogin = new users($dataCheck["users_id"], null, $dataCheck["username"], $dataCheck["password"], $dataCheck["email"]);
                return $userLogin;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    // chi tiết đổ về dữ liệu của user
    public function FindUser($iduser)
    {
        try {
            // $this->connect->query("USE " . parent::DB_NAME);
            $sql = "SELECT * 
                    FROM `users` 
                    
                    WHERE users_id = $iduser";
            $dataCheck = $this->connect->query($sql)->fetch();
            if ($dataCheck != false) {
                $userLogin = new users(
                    $dataCheck["users_id"],
                    $dataCheck["name"],
                    $dataCheck["username"],
                    $dataCheck["password"],
                    $dataCheck["email"],
                    $dataCheck["phone"],
                    $dataCheck["action"],
                    $dataCheck["ban"],
                    $dataCheck["premium"],
                    $dataCheck["ngaythamgia"],
                    $dataCheck["point"]
                );
                return $userLogin;
            }
        } catch (Exception $e) {
            // echo $e->getMessage();
        }
    }
    public function DELETE($sql)
    {
        try {
            // $this->connect->query("USE " . parent::DB_NAME);
            $dataCheck = $this->connect->exec($sql);
        } catch (Exception $e) {
            // echo $e->getMessage();
        }
    }
}
