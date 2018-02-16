<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function insert($nama, $usia, $premi, $rencana, $masa)
    {
        $data = array(
            'nama' => $nama,
            'usia_ket' => $usia,
            'premi_ket' => $premi,
            'rencana_ket' => $rencana,
            'masa_ket' => $masa
        );
        $this->db->insert('klien', $data);
    }
}
