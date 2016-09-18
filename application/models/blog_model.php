<?php
	Class Blog_model extends CI_Model{
		 public function __construct(){
        parent::__construct();
        $this->load->database();
    }

		public function test(){
			$query = $this->db->get('news');
			return $query->result_array();
		}
	}
?>