<?php
Class New_model extends CI_Model{
	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
	public function getNews()
	{
		$this->db->order_by('created','desc');
		$query = $this->db->get('news',16);		
		return $query->result_array();
		// $sql = 'select * from news';
		// return $this->db->query($sql)->result();
	}
	
	public function getData($new_id){
		//$id = $_GET['id'];
		$sql = $this->db->get_where('news',array('id' => $new_id));
		return $sql->row_array();
	}
	public function other(){
		$sql = $this->db->get('news',6,17);
		return $sql->result_array();

	}
	public function photo(){
		$sql = $this->db->get_where('news',array('category_id'=>9),3);
		return $sql->result_array();

	}
	public function video(){
		$this->db->select('news.id, title,image,news.created,name');
		$this->db->from('news');
		$this->db->join('categories', 'news.category_id = categories.id');
		$this->db->where('name','Videos');
		$this->db->order_by('created','desc');
		$this->db->limit(3);

		$query = $this->db->get();
		return $query->result_array();

	}
}
?>