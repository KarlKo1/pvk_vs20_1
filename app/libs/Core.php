<?php


class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $
    // class begin
    //constructor
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $url = $this->getUrl();
        $controllerName = ucwords($url());
        echo $controllerName;
        $controllerName = '../app/controllers/'.$controllerName.'.php';
        if (file_exists($controller) {
            $this ->currentController = $controllerName;
            unset($url($);
        }
        require_once '../app/controllers/'. $this->currentController.'.php';
        $this->currentController = new $this->currentController;
        print_r($this->currentController);
        print_r($url);
    }

    //get url data
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            print_r($url);
            return $url;
        }
    }
} // class end