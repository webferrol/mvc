<?php
class Init extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->setTitle('Home');
       
    }

    
    public function render(){
        print_r($this->model->foo());
        $this->view->render('init/init.view.php');
    }
}