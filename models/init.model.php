<?php
class InitModel extends Model{
    function __construct()
    {
        parent::__construct();
        
    }

    function getArticles(int $inicio,int $post_per_page):array{
        $con = $this->db->connect();
        $sql = 'SELECT * FROM articulos WHERE 1 LIMIT :inicio, :post_per_page';
        $statement = $con->prepare($sql);
        $statement->bindParam(':inicio',$inicio,PDO::PARAM_INT);
        $statement->bindParam('post_per_page',$post_per_page,PDO::PARAM_INT);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }

    function getTotalArticulos(){
        $con = $this->db->connect();
        $sql = 'SELECT count(*) FROM articulos';
        $statement = $con->query($sql);        
        return $statement->fetch()[0];
    }
}