<?php
class App{
    private $path_root;
    private $object;
    private $controller;
    private $method;
    
    
    function __construct()
    {        
        
        $this->path_root = ROOT.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR;
        $this->infoURL();
        
        $file = $this->path_root.$this->controller.'.controller.php';
       
        if(file_exists($file)){
            $this->loadObject($file,ucfirst($this->controller));
        }else{
            $this->loadObject($this->path_root.'nofound.controller.php','Nofound');
        }

        if(!method_exists($this->object,$this->method)) 
            $this->object->render();
        else
            $this->object->{$this->method}();
       
    }

     /**
     * Método que desglosa los parámetros pasados por la URL y lo almacena en función de su finalidad
     */
    private function infoURL():void{
        $parameters = $_GET['controller']??'init';
        $parameters = explode('/',rtrim($parameters,'/'));//rtrim() por si acaso en la parte derecha existe barras /
        $this->controller=$parameters[0];
        $this->method =$parameters[1]??null;        
    }

    function loadObject(string $file,string $className):void{
        require_once($file);
        if(class_exists($className)){
            $this->object = new $className;
       }else{
           die($className.' no existe como Clase');
       }
    }
}