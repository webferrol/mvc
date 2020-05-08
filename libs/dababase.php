<?php
class Database{
    protected $host;
    protected $dbname;
    protected $charset;
    protected $user;
    protected $password;
    protected $error;

    function __construct(string $host = 'localhost', string $dbname = '', string $user = 'root', string $password = '',string $charset = 'UTF8')
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->charset = $charset;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(){
        try{
            $con = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset,$this->user,$this->password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            return $con;        
        }catch(PDOException $e){
            die($e->getMessage());
            //$this->error = $e->getMessage();
            return null;
        }      
    }    
}