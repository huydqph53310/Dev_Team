<?php

class ConnectDatabase extends Config
{
    public $connect;
    public $BaseURL = parent::BASEURL;
    public $MYSQL = parent::MYSQL;
    public $PORT = parent::PORT;
    public $USERNAE = parent::USERNAME;
    public $PASSWORD = parent::PASSWORD;
    public $DBNAME = parent::DB_NAME;
    public function __construct()
    {
        try {
            $this->connect = new PDO(
                "mysql:host=$this->MYSQL;port=$this->PORT; dbname = $this->DBNAME",
                $this->USERNAE,
                $this->PASSWORD
            );
            //echo "Connect Succsses fully ";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->connect = null;
    }
}
