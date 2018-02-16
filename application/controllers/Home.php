<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dataset');
        $this->load->model('Klien');
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
        $klien = array(
            'nama' => $_POST['nama'],
            'usia' => $_POST['usia'],
            'premi' => $_POST['premi'],
            'rencana' => $_POST['rencana'],
            'masa' => $_POST['masa']
        );
        $id = $this->Klien->insert($klien);
        $usia = $this->Usia->usiaInitial($_POST['usia']);
        $rencana = $this->Rencana->rencanaInitial($_POST['rencana']);
        $premi = $this->Premi->premiInitial($_POST['premi']);
        $masa = $this->Masa->masaInitial($_POST['masa']);
        $dataset = array(
            'id' => null,
            'klien_id' => $id,
            'usia_id' => $usia,
            'gender_id' => $_POST['gender'],
            'status_id' => $_POST['status'],
            'penghasilan_id' => $_POST['gaji'],
            'rencana_id' => $rencana,
            'frekuensi_id' => $_POST['frekuensi'],
            'premi_id' => $premi,
            'masa_id' => $masa,
            'tipe_id' => $tipe,
            'kategori_id' => $_POST['kelas']
        );
        $this->Dataset->insertDataset($dataset);
        redirect('/Home');
    }
}
