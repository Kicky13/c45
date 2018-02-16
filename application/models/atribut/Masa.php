<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masa extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function masaInitial($masa)
    {
        if ($masa < 70){
            $id = 1;
        } elseif ($masa >= 70 && $masa < 90){
            $id = 2;
        } else {
            $id = 3;
        }
        return $id;
    }
}
