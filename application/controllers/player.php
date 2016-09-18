<?php
Class Player extends CI_Controller{

	public function index(){

		$this->load->model('New_model');
		$a_data = $this->New_model->getNews();
		foreach ($a_data as &$value) {
				# code...
				$value['title-url'] = $this->change_string($value['title']);
				$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
				$value['title-url'] = str_replace(' ', '-',$value['title-url']);
				

		}	
		
		$b = array_shift($a_data);
		$data = array(
			'b_data'=>$a_data,
			'first_row'=>$b
			);

		$photo = $this->New_model->photo();
		foreach ($photo as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		//print_r($img);die;
		}
		$img = array('image'=>$photo);

		$video = $this->New_model->video();
		foreach ($video as &$value) {
				# code...
				$value['title-url'] = $this->change_string($value['title']);
				$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
				$value['title-url'] = str_replace(' ', '-',$value['title-url']);

		}
		

		$media = array('videos'=>$video);

		$other = $this->New_model->other();
		$others = array('khac'=>$other);

		$datatitle['page_title'] = 'The thao cap nhat';
		$this->load->view('teamplate/header',$datatitle);
		$this->load->view('player/index',$data);
		$this->load->view('player/other',$others);
		$this->load->view('player/photo',$img);
		$this->load->view('player/video',$media);
		$this->load->view('teamplate/content');
		$this->load->view('teamplate/right');
		$this->load->view('teamplate/footer');
	}
	public function view($title,$id){			

		$this->load->model('New_model');
		$v_data = $this->New_model->getdata($id);		
		
		$dataview = array(
			'value'=>$v_data
			);
		//print_r($dataview);die;
		$datatitle['page_title'] = 'The thao cap nhat- detail';
		$this->load->view('teamplate/header',$datatitle);
		$this->load->view('player/view',$dataview);
		$this->load->view('teamplate/right');
		$this->load->view('teamplate/footer');
	}
	function change_string($str) {
// In thường
     $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);    
// In đậm
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
     $str = preg_replace("/(Đ)/", 'D', $str);
     return $str; // Trả về chuỗi đã chuyển
} 
}
?>