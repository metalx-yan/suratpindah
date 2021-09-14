<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model
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

    public function update($data, $table, $where){
        $this->db->update($table , $data , $where);
        $query = $this->db->get('tb_admin')->result();
        return $query;
    }

  
    function cek_user($email,$password) {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query = $this->db->get('tb_user')->result();
        return $query;
    }
  

}
?>