<?php

class AdminController
{
    public $connect;
    public $swuser;

    public function __construct()
    {
        $this->connect = new ConnectDatabase();
        $this->swuser = new SwitchQuery();
    }

    public function __destruct() {}

    public function Trangchu()
    {
        include "project/app/view/Home.php";
    }

    public function Login()
    {
        if (!isset($_SESSION["username"])) {
            $tberr = "";
            $tbsus = "";
            if (isset($_POST["Login"])) {
                if ($_POST["username"] == "" || $_POST["password"] == "") {
                    $tberr = "Email, password Đang trống phải không?";
                }
                if ($tberr == "") {
                    $data = $this->swuser->Login($_POST["username"]);
                    if (($_POST["username"] ==  $data->username) && ($_POST["password"] == $data->password)) {
                        $tbsus = "Đăng Nhập thành công";
                        $_SESSION["username"] = $_POST["username"];
                        $_SESSION["id"] = $data->id;
                        header("Location: ?wh=");
                    } else {
                        $tberr = "Thông tin tài khoản mật khẩu không chính sác!";
                    }
                    // echo $data->username;
                    // echo $data->password;

                    // var_dump($data->username);
                }
                // var_dump($_POST);
            }
        } else {
            header("Location: ?wh=");
        }
        include "project/app/view/LoginScr/LoginScr.php";
    }

    public function Logout()
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        if (isset($_SESSION['user_id'])) {
            // Hủy bỏ tất cả các biến session
            $_SESSION = [];

            // Nếu bạn muốn xóa cookie của session
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }

            // Hủy session
            session_destroy();
        }
        session_unset();

        // Chuyển hướng người dùng đến trang đăng nhập hoặc trang chủ
        header("Location: ?wh=");
        exit();
    }
    public function Regsiter()
    {
        if (!isset($_SESSION["username"])) {
            $tberr = "";
            $tbsus = "";
            $createUser = new users();
            if (isset($_POST["regsiter"])) {
                $createUser = new users(
                    null,
                    $_POST["name"],
                    $_POST["username"],
                    $_POST["password"],
                    $_POST["email"],
                    phone: $_POST["phone"]
                );
                if ($createUser->name == "" || $createUser->username == "" || $createUser->password == "" || $createUser->email == "" || $createUser->phone == "") {
                    $tberr = "Các trường này là bắt buộc";
                }
                if ($tberr == "") {
                    $tbsus = "Đăng Ký tài khoản thành công";
                    $this->swuser->ActionQuery("INSERT", "createuser", $createUser);
                }
            }
        } else {
            header("Location: ?wh=");
        }
        include "project/app/view/LoginScr/RegsiterScr.php";
    }

    public function GETURL()
    {
        $wh = "";
        if (isset($_GET["wh"])) {
            $wh = $_GET["wh"];
            return $wh;
        }
    }
    public function GETID()
    {
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            return $id;
        }
    }
}
