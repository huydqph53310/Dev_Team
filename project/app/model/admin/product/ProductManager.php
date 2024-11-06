<?php
// Dùng chung hàm connect với thằng cha
class ProductManager extends ConnectDatabase
{
    public $connect;

    // trỏ khi db connect vào controller
    public function __construct()
    {
        parent::__construct();
    }

    // trả về null khi db không dùng

    public function __destruct()
    {
        parent::__destruct();
    }

    // Them moi san pham 
    // -> here

    public function InsertProduct(object $obj)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }

    public function EditProduct(object $obj, $id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }


    public function Delete($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }

    public function FindProductFollowId($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }
}
