<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function verify($username, $password)
    {
        $query = $this->db->query('SELECT * FROM user WHERE username = "'.$username.'" AND password = "'.$password.'"')->result_array();
        $cek = count($query);
        if ($cek == 0){
            return false;
        } else {
            return true;
        }
    }
    public function test()
    {
        return 1;
    }
}
