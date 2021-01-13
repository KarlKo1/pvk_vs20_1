<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        echo 'Pages class is loaded<br>';
    }
    public function index() {
        echo 'Index method is loaded<br>';
        $this->view('index');
    }
    public function about() {
        echo 'About method is loaded<br>';
        $this->view('about');
}

}