<?php
class Connection{
    private $host = '127.0.0.1';
    private $dbName = 'cryptodomaindb';
    private $username = 'root';
    private $password = '';
    protected $con;

    public function __construct(){
        $this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName, $this->username ,$this->password);
    }
}
?>