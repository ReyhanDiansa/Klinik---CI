<?php
class Base_model extends CI_Model{

    protected $table = null;

    public function __construct(){
        parent::__construct();
        //$this->db->db_debug = false;
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($ID_Dokter,$data){
        $this->db->where('ID_Dokter',$ID_Dokter);
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($ID_Dokter){
        return $this->db->get_where($this->table,['ID_Dokter' => $ID_Dokter])->row_array();
    }

    public function delete($ID_Dokter){
        $this->db->db_debug = false;
        $this->db->where('ID_Dokter',$ID_Dokter);
        $this->db->delete($this->table);
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }
}