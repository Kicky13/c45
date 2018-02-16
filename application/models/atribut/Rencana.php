<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rencana extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function rencanaInitial($rencana)
    {
        if ($rencana <= 10){
            $id = 1;
        } else {
            $id = 2;
        }
        return $id;
    }
}
