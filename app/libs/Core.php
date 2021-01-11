<?php


class Core
{ // class begin
    //constructor
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->getUrl();
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