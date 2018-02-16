<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premi extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function premiInitial($premi){
        if ($premi < 500000){
            $id = 1;
        } elseif ($premi >= 500000 && $premi < 1000000){
            $id = 2;
        } elseif ($premi >= 1000000 && $premi < 5000000){
            $id = 3;
        } else {
            $id = 4;
        }
        return $id;
    }
}
