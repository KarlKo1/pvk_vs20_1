<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index() {
        // echo 'Index method is loaded<br>';
        $data = array(
           'title' => 'Welcome to Pages',
            'content' => 'Pages index view is loaded by MVC'
        );
        $this->view('pages/index', $data);
    }
    public function about() {
        // model test
        // $this->pagesModel->addUser();
        // $users = $this->pagesModel->getUsers();
        // print_r($users);
        $usersCount = $this->pagesModel->usersCount();
        echo 'Usersin db - '.$usersCount.'<br>';
        // echo 'About method is loaded<br>';
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }

}