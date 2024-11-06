<?php

class SwitchQuery extends ConnectDatabase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
        // Close the database connection if needed
        $this->connect = null;
    }

    public function ActionQuery($nameQuery, $idAction, object $obj = null, $iduser = null, $isadmin = 0)
    {
        switch ($nameQuery) {
            case "SELECT":
                // Placeholder for SELECT logic
                break;

            case "UPDATE":
                // Placeholder for UPDATE logic
                break;

            case "INSERT":
                if ($idAction === "createuser") {
                    $sql = "INSERT INTO `users` (`name`, `username`, `password`, `email`, `phone`, `action`, `ban`)
                            VALUES (:name, :username, :password, :email, :phone, 0, 0)";
                    $stmt = $this->connect->prepare($sql);
                    $stmt->execute([
                        ':name' => $obj->name,
                        ':username' => $obj->username,
                        ':password' => $obj->password,
                        ':email' => $obj->email,
                        ':phone' => $obj->phone
                    ]);
                }
                break;

            case "DELETE":
                // Placeholder for DELETE logic
                break;

            case "OPENMANAGER":
                if ($isadmin == 0) {
                    // Code for handling non-admin access to manager
                    echo "Access denied for non-admin users.";
                } else {
                    // Code for handling admin access to manager
                    echo "Admin access granted.";
                }
                break;

            default:
                echo "QUERY NOT SUPPORTED.";
                break;
        }
    }

    public function InsertQuery($sql)
    {
        try {
            $dataCheck = $this->connect->exec($sql);
        } catch (Exception $e) {
            error_log("Insert Query Error: " . $e->getMessage());
        }
    }

    public function Login($iduser)
    {
        try {
            $sql = "SELECT users_id, email, username, password FROM `users` WHERE username LIKE :iduser";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([':iduser' => "%$iduser%"]);
            $dataCheck = $stmt->fetch();

            if ($dataCheck) {
                return new users($dataCheck["users_id"], null, $dataCheck["username"], $dataCheck["password"], $dataCheck["email"]);
            }
        } catch (Exception $e) {
            error_log("Login Error: " . $e->getMessage());
        }
    }

    public function FindUser($iduser)
    {
        try {
            $sql = "SELECT * FROM `users` WHERE users_id = :iduser";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([':iduser' => $iduser]);
            $dataCheck = $stmt->fetch();

            if ($dataCheck) {
                return new users(
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
            }
        } catch (Exception $e) {
            error_log("Find User Error: " . $e->getMessage());
        }
    }

    public function DELETE($sql)
    {
        try {
            $this->connect->exec($sql);
        } catch (Exception $e) {
            error_log("Delete Error: " . $e->getMessage());
        }
    }
}
