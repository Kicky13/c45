<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $verify = $this->User->verify($_POST['username'], $_POST['password']);
        if ($verify == true){
            redirect('/Home');
        } else {
            redirect('/Login');
        }
    }
}