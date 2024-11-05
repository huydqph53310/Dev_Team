<?php
class ClientController
{
    public $connect;
    public $swuser;

    public function __construct()
    {
        $this->connect = new ConnectDatabase();
        $this->swuser = new SwitchQuery();
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
    public function Profile()
    {
        $data = $this->swuser->FindUser($_SESSION["id"]);
        include "project/app/view/LoginScr/Client.php";
    }
}
