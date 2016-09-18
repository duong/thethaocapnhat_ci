<?php
class User_model extends CI_Model{
	public function checklogin($username,$password){
		
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		$sql= $this->db->get('users');
		return $sql->row_array();
	}
}
?>