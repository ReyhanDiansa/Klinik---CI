<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Tindakan extends Base_Controller {

    //field tabel
    var $data = [
      'No_reg' => '',
      'ID_Dokter'=>'',
      'Jam' => '',  
      'Diagnosa' => '',
      'Tindakan_Kedokteran' => '',  
      'No_Ruang' => '',  
      'Keterangan' => '',  
      'No_Rm' => '',  

    ];

    //nama model
    var $context = 'tindakan';

    function form(){
		$No_reg = $this->uri->segment(3);
		    if($No_reg){
		      $this->data = $this->tindakan->find_by_id($No_reg);
		    }
		    $this->load->view('tindakan/form',$this->data);
    }

    function save(){
      $this->load->helper('string');
      $No_reg= $this->input->post('No_reg');
    $this->form_validation->set_rules('ID_Dokter','ID_Dokter','required');
     
    $rand=random_string('sha1');
    
    //time zone +0700
    $time= date("h:i:sa");
    $this->data = [
      'No_reg'=> $rand,
      'ID_Dokter' => $this->input->post('ID_Dokter'),
      'Jam' => $time,
      'Diagnosa' => $this->input->post('Diagnosa'),
      'Tindakan_Kedokteran' => $this->input->post('Tindakan_Kedokteran'),
      'No_Ruang' => $this->input->post('No_Ruang'),
      'Keterangan' => $this->input->post('Keterangan'),
      'No_Rm' => $this->input->post('No_Rm'),
    
    ];
    if($this->form_validation->run() == FALSE){
      $this->load->view('tindakan/form',$this->data);
    }else{
      if($No_reg == ''){
        $this->tindakan->insert($this->data);
      }else{
        $this->tindakan->update($No_reg,$this->data);
      }
      redirect(base_url('tindakan'));
    }

    }

}
