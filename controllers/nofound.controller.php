<?php
class Nofound extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->setTitle('Página no encontrada');
        $this->view->setStyle('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        $this->view->setStyle('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
        $this->view->setStyle('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        $this->view->setStyle(URLBASE.'/public/css/blog.min.css');
    }

    function render(){
        $this->view->render('init/header.view.php','nofound/nofound.view.php');
    }
}