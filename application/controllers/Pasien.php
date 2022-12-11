<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Pasien extends Base_Controller {

    //field tabel
    var $data = [
      'No_Rm' => '',
      'Nama' => '',  
      'Alamat' => '',
      'Tgl_Lahir' => '',  
      'Jenis_Kelamin' => '',  
      'Pekerjaan' => '',  

    ];

    //nama model
    var $context = 'pasien';

    function form(){
		$No_Rm = $this->uri->segment(3);
		    if($No_Rm){
		      $this->data = $this->pasien->find_by_id($No_Rm);
		    }
		    $this->load->view('pasien/form',$this->data);
    }

    function save(){
      $this->load->helper('string');
      $No_Rm= $this->input->post('No_Rm');
    $this->form_validation->set_rules('Nama','Nama','required');
    $rand=random_string('sha1');
    $this->data = [
      'No_Rm'=> $rand,
      'Nama' => $this->input->post('Nama'),
      'Alamat' => $this->input->post('Alamat'),
      'Tgl_Lahir' => $this->input->post('Tgl_Lahir'),
      'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
      'Pekerjaan' => $this->input->post('Pekerjaan'),
    
    ];
    if($this->form_validation->run() == FALSE){
      $this->load->view('pasien/form',$this->data);
    }else{
      if($No_Rm == ''){
        $this->pasien->insert($this->data);
      }else{
        $this->pasien->update($No_Rm,$this->data);
      }
      redirect(base_url('pasien'));
    }

    }

}
