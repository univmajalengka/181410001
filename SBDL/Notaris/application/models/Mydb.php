<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydb extends CI_Model{
	function input_dt($data,$table){
		$this->db->insert($table,$data);
	}
	function update_dt($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	//login
	function auth_leader($username,$password){
		$query = $this->db->query('select * from admin where username="'.$username.'" and password=md5("'.$password.'") LIMIT 1');
		return $query;
	}
	
	//select * from
	function v_admin(){
		return $query = $this->db->get('admin')->result();
	}
	function v_klien(){
		return $query = $this->db->get('v_klien')->result();		
	}
	function v_notaris(){
		return $query = $this->db->get('v_notaris')->result();		
	}
	function v_ppat(){
		return $query = $this->db->get('v_ppat')->result();		
	}
	function v_jenis_akta(){
		return $query = $this->db->get('jenis_akta')->result();		
	}
	
	//select * from table where
	function s_admin($username){
		return $query = $this->db->query('select * from admin where username="'.$username.'"')->result();
	}
	function s_klien($pk){
		return $query = $this->db->query('select * from klien where no_ktp="'.$pk.'"')->result();		
	}
	function s_notaris($pk){
		return $query = $this->db->query('select * from notaris where no_akta_n="'.$pk.'"')->result();		
	}
	function s_ppat($pk){
		return $query = $this->db->query('select * from ppat where no_akta_p="'.$pk.'"')->result();		
	}
	function s_jenis_akta($pk){
		return $query = $this->db->query('select * from jenis_akta where id_jenis_akta="'.$pk.'"')->result();		
	}
}