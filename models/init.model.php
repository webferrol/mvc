<?php
class InitModel extends Model{
    function __construct()
    {
        parent::__construct();
        
    }

    function foo(){
        //$con = $this->db->connect(); 
        return $this->getCol('_users');    
    }
}