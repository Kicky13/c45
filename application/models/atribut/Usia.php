<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usia extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function usiaInitial($usia)
    {
        if ($usia <= 29){
            $id = 1;
        } elseif ($usia >= 30 && $usia <= 39){
            $id = 2;
        } else {
            $id = 3;
        }
        return $id;
    }
}
