<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getData($tipe)
    {
        $data = $this->db->query('SELECT * FROM dataset d JOIN klien kl ON d.klien_id = kl.id JOIN usia u ON u.id = d.usia_id JOIN gender g ON g.id = d.gender_id JOIN penghasilan p ON p.id = d.penghasilan_id JOIN rencana r ON r.id = d.rencana_id JOIN frekuensi f ON f.id = d.frekuensi_id JOIN masa m ON m.id = d.masa_id JOIN status s ON s.id = d.status_id JOIN premi pr ON pr.id = d.premi_id JOIN tipe t ON t.id = d.tipe_id JOIN kategori k ON k.id = d.kategori_id WHERE tipe_id = '.$tipe)->result_array();
        return $data;
    }
    public function insertDataset()
    {

    }
}
