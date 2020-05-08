<?php
abstract class Controller{
    protected $view;
    protected $model;
    function __construct()
    {
        $this->view = new View();
        
    }   

    function loadModel(string $model){
        $path_root = ROOT.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR;
        if(file_exists($path_root.$model.'.model.php')){
            //print_r(DIR_ROOT.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.$model.'.model.php');
            require_once($path_root.$model.'.model.php');
            $className = ucfirst($model).'Model';
            if(class_exists($className))
                $this->model = new $className();
            else
                die('La clase '.$className.' no existe');
        }
    }

    abstract function render();
}