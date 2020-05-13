<?php
class Init extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->setTitle('Blog');
       $this->view->setStyle('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
       $this->view->setStyle('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
       $this->view->setStyle('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
       $this->view->setStyle(URLBASE.'/public/css/blog.min.css');
       
    }

    
    public function render(){
        $articulos = $this->model->getArticles();
        $this->view->render('init/header.view.php','init/articles.view.php','init/footer.php');
    }
}