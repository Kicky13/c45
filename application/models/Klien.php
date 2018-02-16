<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function insert($klien)
    {
        $data = array(
            'id' => null,
            'nama' => $klien['nama'],
            'usia_ket' => $klien['usia'],
            'premi_ket' => $klien['premi'],
            'rencana_ket' => $klien['rencana'],
            'masa_ket' => $klien['masa']
        );
        $this->db->insert('klien', $data);
        return $this->db->insert_id();
    }
}
