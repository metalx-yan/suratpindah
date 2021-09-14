<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    function insert($data, $table){
        $query = $this->db->insert($table,$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

     function update($where,$data, $table){
         $this->db->where('id_penduduk',$where);
        $query = $this->db->update($table,$data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

	function updateMutasi($where,$data, $table){
		$this->db->where('id_mutasi',$where);
	   $query = $this->db->update($table,$data);
	   if ($this->db->affected_rows() > 0) {
		   return true;
	   } else {
		   return false;
	   }
   }

    function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function read($table){
        $query = $this->db->get($table)->result();
        return $query;
    }

    function readWhere($table,$where){
        $query = $this->db->get($table)->result();
        $this->db->where($where);
        return $query;
    }

    function getDatabyJoin($table1,$table2){
        $this->db->join($table2, 'nik');
        $query = $this->db->get($table1)->result();
        return $query;
    }

    function getPermintaanMutasi($table1,$table2){
        $this->db->join($table2, 'nik');
        $this->db->where('status_permintaan','0');
        $query = $this->db->get($table1)->result();
        return $query;
    }

    function getMutasiMasuk($table1,$table2){
        $this->db->join($table2, 'nik');
        $this->db->where('status_mutasi','1');
        $this->db->where('status_permintaan','1');
        $query = $this->db->get($table1)->result();
        return $query;
    }
    function getMutasiKeluar($table1,$table2){
        $this->db->join($table2, 'nik');
        $this->db->where('status_mutasi','2');
        $this->db->where('status_permintaan','1');
        $query = $this->db->get($table1)->result();
		//var_dump($query);
        // $query = $this->db->query("SELECT * AS jumlah FROM `$table1` where status_mutasi = '2'");

        return $query;
    }

    function getJumlah($table,$where){
        $query = $this->db->query("SELECT COUNT(`$where`) AS jumlah FROM `$table`");
       return $query->result();
    }

	function getTotalGender($table,$count,$where){
        $query = $this->db->query("SELECT COUNT(`$count`) AS jumlah FROM `$table` WHERE jenis_kelamin = '$where' ");
       return $query->result();
    }

	function getTotalPindah($table,$count,$where){
        $query = $this->db->query("SELECT COUNT(`$count`) AS jumlah FROM `$table` WHERE status_mutasi = '$where' ");
       return $query->result();
    }

}
?>
