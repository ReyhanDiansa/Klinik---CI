<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Dokter extends Base_Controller {

    //field tabel
    var $data = [
      'ID_Dokter' => '',
      'ID_Departemen' => '',  
      'Nama' => '',  
		'Alamat' => '',
    'Tgl_Lahir' => '',  
    ];

    //nama model
    var $context = 'dokter';

    function form(){
		$ID_Dokter = $this->uri->segment(3);
		    if($ID_Dokter){
		      $this->data = $this->dokter->find_by_id($ID_Dokter);
		    }
		    $this->load->view('dokter/form',$this->data);
    }

    function save(){
      $this->load->helper('string');
    $ID_Dokter= $this->input->post('ID_Dokter');
    $this->form_validation->set_rules('Nama','Nama','required');
    $rand=random_string('sha1');
    $this->data = [
      'ID_Dokter'=> $rand,
      'ID_Departemen' => $this->input->post('ID_Departemen'),
      'Nama' => $this->input->post('Nama'),
      'Alamat' => $this->input->post('Alamat'),
      'Tgl_Lahir' => $this->input->post('Tgl_Lahir')
    ];
    if($this->form_validation->run() == FALSE){
      $this->load->view('dokter/form',$this->data);
    }else{
      if($ID_Dokter == ''){
        $this->dokter->insert($this->data);
      }else{
        $this->dokter->update($ID_Dokter,$this->data);
      }
      redirect(base_url('dokter'));
    }

    }

}
