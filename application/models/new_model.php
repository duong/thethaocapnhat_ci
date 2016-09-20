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
	public function getview($id){
		//$id = $_GET['id'];
		$this->db->select('news.id, title,image,description,news.created,name');
		$this->db->limit(20);
		$this->db->join('categories', 'news.category_id = categories.id');
		$sql = $this->db->get_where('news',array('category_id' => $id));
		return $sql->result_array();
	}
	public function other(){
		$sql = $this->db->get('news',6,17);
		return $sql->result_array();

	}
	public function photo(){
		$this->db->select('news.id, title,image,news.created,name,description');
		$this->db->from('news');
		$this->db->join('categories', 'news.category_id = categories.id');
		$this->db->where('name','Photo news');
		$this->db->order_by('created','desc');
		$this->db->limit(3);

		$query = $this->db->get();
		
		return $query->result_array();
	}
	public function listview(){
		$this->db->select('id, title,image,created,viewed');
		$this->db->from('news');
		$this->db->order_by('viewed','desc');
		$this->db->limit(5);

		$query = $this->db->get();
		
		return $query->result_array();

	}
	public function video(){
		$this->db->select('news.id, title,image,news.created,name,description');
		$this->db->from('news');
		$this->db->join('categories', 'news.category_id = categories.id');
		$this->db->where('name','Videos');
		$this->db->order_by('created','desc');
		$this->db->limit(3);

		$query = $this->db->get();
		
		return $query->result_array();

	}
	public function menu(){
		$this->db->order_by('created','desc');
		$sql = $this->db->get('categories',6);
		return $sql->result_array();

	}

	public function total_view($id)
    {
       	$sql = "update news set viewed = viewed +1 where id =".$id;
        return $this->db->query($sql);
    }  
}
?>