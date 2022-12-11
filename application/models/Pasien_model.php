<?php
// require_once 'Base_model.php';

class Pasien_model extends CI_Model{
    //nama tabel
    var $table = "tabel_pasien";
    
        public function insert($data){
            return $this->db->insert($this->table,$data);
        }
    
        public function update($No_Rm,$data){
            $this->db->where('No_Rm',$No_Rm);
            return $this->db->update($this->table,$data);
        }
    
        public function find_all(){
            return $this->db->get($this->table)->result_array();
        }
    
        public function find_by_id($No_Rm){
            return $this->db->get_where($this->table,['No_Rm' => $No_Rm])->row_array();
        }
    
        public function delete($No_Rm){
            $this->db->db_debug = false;
            $this->db->where('No_Rm',$No_Rm);
            $this->db->delete($this->table);
        }
    
        public function get_total(){
            return $this->db->count_all($this->table);
        }
    }
    

