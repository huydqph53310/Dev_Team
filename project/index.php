<?php
// trang này chỉ sử dụng điều hướng không có logic
/// nhúng các file cần thiết nào đấy
include_once "config/Config.php";
//model
include_once "app/model/admin/ConnectDatabase.php";
include_once "app/model/admin/SwitchQuery.php";
// include_once "project/app/model/user/SwitchQueryUser.php";
include_once "app/model/admin/usermanager/users.php";
include_once "app/model/admin/usermanager/datauser.php";
session_start();
//controller
include_once "app/controller/Admin/AdminController.php";
include_once "app/controller/Client/ClientController.php";
//include_once "project/app/controller/Admin/SwitchQuery.php";

//include_once
// gọi thằng cha trở về
$Admicontroller = new AdminController();
$Clientcontroller = new ClientController();
// $checkConnect = new ConnectDatabase();
// logic điều hướng
switch ($Admicontroller->GETURL()) {
    case "":
        header("location: ?wh=home");
        break;
    case "home":
        $Admicontroller->Trangchu();
        break;
    case "login":
        $Admicontroller->Login();
        break;
    case "reg":
        $Admicontroller->Regsiter();
        break;
    case "logout":
        $Admicontroller->Logout();
        break;
    case "client":
        $Clientcontroller->Profile();
        break;
    case "disconnect":
        include "project/app/view/Disconnect.php";
        break;
    default:
        include "project/app/view/404.php";
        break;
}
