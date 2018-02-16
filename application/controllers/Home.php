<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dataset', 'Klien');
    }

    public function index()
    {
        $trainings = $this->Dataset->getData(2);
        $tests = $this->Dataset->getData(1);
        $this->load->view('home', array('trainings' => $trainings, 'tests' => $tests));
    }
    public function insert($tipe)
    {
        $this->load->view('insert', array('tipe' => $tipe));
    }
    public function submit($tipe)
    {

    }
}
