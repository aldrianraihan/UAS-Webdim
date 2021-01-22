<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('dosen/mdosen');
    $this->load->helper('url');
    $this->load->library('form_validation');

  }

  function input_t_dosen(){
    $NIDN = $this->input->post('NIDN');
    $ds_nm = $this->input->post('ds_nm');
    $gelardepan = $this->input->post('gelardepan');
    $gelarbelakang = $this->input->post('gelarbelakang');
    $ds_email = $this->input->post('ds_email');
    $ds_tlp = $this->input->post('ds_tlp');
    $submit = $this->input->post('submit');

    $data = array(
      'NIDN' => $NIDN,
      'ds_nm' => $ds_nm,
      'gelardepan' => $gelardepan,
      'gelarbelakang' => $gelarbelakang,
      'ds_email' => $ds_email,
      'ds_tlp' => $ds_tlp
    );
    if (isset($submit)) {
      $this->mdosen->input_t_dosen($data,'t_dosen');
      if($this->db->affected_rows() > 0){
        echo 'Data berhasil diinput';
        redirect('overview');
      } else {
        // $this->session->set_flashdata('error', 'Comment gagal ditambah');
        echo "<script>javascript:window.history.go(-1);</script>";
      }
    }

  }


}
