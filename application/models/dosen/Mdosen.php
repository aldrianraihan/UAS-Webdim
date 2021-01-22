<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mdosen extends CI_Model
{
  function input_t_dosen($data,$table){
    $this->db->insert($table,$data);
  }
}
