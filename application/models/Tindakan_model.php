<?php
require_once 'Base_model.php';

class Tindakan_model extends CI_Model{
    //nama tabel
    var $table = "tabel_tindakan";

    public function find_all(){
        return $this->db->query("SELECT tabel_tindakan.*,tabel_dokter.ID_Dokter,tabel_dokter.ID_Departemen,tabel_pasien.*
        FROM tabel_tindakan 
        INNER JOIN tabel_dokter ON tabel_dokter.ID_Dokter = tabel_tindakan.ID_Dokter INNER JOIN tabel_pasien ON tabel_pasien.No_Rm=tabel_tindakan.No_Rm")->result_array();
    }

    public function find_by_id($No_reg){
        return $this->db->query("SELECT tabel_tindakan.*,tabel_dokter.*,tabel_pasien.*
        FROM tabel_tindakan 
        INNER JOIN tabel_dokter ON tabel_dokter.ID_Dokter = tabel_tindakan.ID_Dokter INNER JOIN tabel_pasien ON tabel_pasien.No_Rm=tabel_tindakan.No_Rm  WHERE tabel_tindakan.No_reg='$No_reg'")->row_array();

    }

    public function pagination($limit, $start){
        
        return $this->db->query("SELECT tabel_tindakan.*,tabel_dokter.*,tabel_pasien.*
        FROM tabel_tindakan 
        INNER JOIN tabel_dokter ON tabel_dokter.ID_Dokter = tabel_tindakan.ID_Dokter INNER JOIN tabel_pasien ON tabel_pasien.No_Rm=tabel_tindakan.No_Rm LIMIT $start,$limit")->result_array();
    }


	public function search($kw,$limit,$start){
        if($kw != ''){

return $this->db->query("SELECT tabel_tindakan.*,tabel_dokter.*,tabel_pasien.*
FROM tabel_tindakan 
INNER JOIN tabel_dokter ON tabel_dokter.ID_Dokter = tabel_tindakan.ID_Dokter INNER JOIN tabel_pasien ON tabel_pasien.No_Rm=tabel_tindakan.No_Rm WHERE tabel_pasien.Nama LIKE '%$kw%' LIMIT $start,$limit")->result_array();
        }
        return $this->pagination($limit,$start);
    }

   
    
    public function get_total_search($kw){
        $rows = $this->db->query("SELECT tabel_tindakan.*,tabel_dokter.*,tabel_pasien.*
        FROM tabel_tindakan 
        INNER JOIN tabel_dokter ON tabel_dokter.ID_Dokter = tabel_tindakan.ID_Dokter INNER JOIN tabel_pasien ON tabel_pasien.No_Rm=tabel_tindakan.No_Rm WHERE tabel_pasien.Nama LIKE '%$kw%' ")->result_array();
        return count($rows);

    }

    
    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($No_reg,$data){
        $this->db->where('No_reg',$No_reg);
        return $this->db->update($this->table,$data);
    }


    public function delete($No_reg){
        $this->db->db_debug = false;
        $this->db->where('No_reg',$No_reg);
        $this->db->delete($this->table);
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }
}
