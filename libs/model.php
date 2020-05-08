<?php
class Model{
    protected $db;
    function __construct()
    {
        $this->db = new Database('localhost','wf_englishpanish');
    }

    /**
     * @param {string} $table Nombre de la tabla de la que deseamos extraer las columnas
     * @return {Array} $fields Columnas ({string}) de una tabla dada
     */
    public function getCol($table){
        $con=$this->db->connect();
        $fields=[];
        try{
           
            $sql="SELECT  DISTINCT COLUMN_NAME       
              FROM INFORMATION_SCHEMA.COLUMNS
              WHERE TABLE_NAME = '$table'
              ORDER BY ORDINAL_POSITION";
            $statement = $con->query($sql);
            if(!$statement->rowCount()){
                $this->error=true;
                $this->errorMessage='Tabla inexsitente o vacía';
            }else{
                foreach($statement as $fila){
                    $fields[]=$fila['COLUMN_NAME'];
                }
                //print_r($fields);
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }           
        return $fields;        
    }
}