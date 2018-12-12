<?php
// require_once("./config.php");
// $dbh=null;
 class Connection{
    protected $server ='mysql:host=127.0.0.1;dbname=autos'; 
    protected $username= 'root';
    protected $password='';
    protected $dbh=null;

    function __construct(){
    try {
        $this->dbh = new PDO($this->server,$this->username,$this->password);
    }catch (PDOException $e){};
}

    public function disconnected() {
     ($this->dbh!=null)? $this->dbh=null: "disconnected failed";
    }

    public function getconnection(){
        return $dbh;
    }

}