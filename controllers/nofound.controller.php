<?php
class Nofound extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->setTitle('Página no encontrada');
    }

    function render(){
        $this->view->render('nofound/nofound.view.php');
    }
}