<?php
class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('Blog_model');
		$a = $this->Blog_model->test();
		echo '<pre>';
		print_r($a);die;
	}

	public function comments()
	{
		echo 'Look at this!';
	}
}
?>