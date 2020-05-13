<?php
class Database{
    protected $host;
    protected $dbname;
    protected $charset;
    protected $user;
    protected $password;
    protected $error;

    function __construct(string $host = DB_HOST, string $dbname = DB_DBNAME, string $charset = DB_CHARSET, string $user = DB_USER, string $password = DB_PASSWORD)
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