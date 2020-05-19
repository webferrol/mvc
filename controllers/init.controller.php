<?php
require_once('includes/common.php');
class Init extends Controller{
    use General;
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
        $this->view->articulos = $this->model->getArticles($this->obtener_post(2),2);
        //paginación        
        $this->view->numero_paginas = $this->numero_paginas(2);
        $this->view->pagina_actual = $_GET['p']??1;
        $this->view->render('init/header.view.php','init/articles.view.php','init/paginacion_footer.view.php');
    }


    
    public function numero_paginas(int $post_por_pagina){
        $total_post = $this->model->getTotalArticulos();
        $numero_paginas = ceil($total_post/$post_por_pagina);
        return $numero_paginas;
    }

}