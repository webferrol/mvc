<?php
class View{
    private $path_root;
    private $path;
    private $title;
    private $h1;
    private $styles=[];
    private $scripts=[];
    private $favicon;

    function __construct()
    {
        $this->path_root = ROOT.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR;
        $this->title = 'Título del documento de Webferrol';
    }

    public function setTitle(string $title):void{
        $this->title=$title;
    }

    public function setH1(string $h1):void{
        $this->h1=$h1;
    }

    public function setFavicon(string $favicon):void{
        $this->favicon = $favicon;
    }

    public function setStyle(string ...$styles):void{
        foreach($styles as $style)
            array_push($this->styles,$style);
    }

    public function voidStyle():void{
        $this->styles=[];
    }

    public function setScript(string ...$scripts):void{
        foreach($scripts as $script)
            array_push($this->scripts,$script);
    }

    public function voidScript():void{
        $this->scripts=[];
    }

    public function render(?string ...$pages):void{
        require_once($this->path_root.'head.view.php');
        foreach($pages as $page)
            require_once($this->path_root.$page);
        require_once($this->path_root.'foot.view.php');
    }
}