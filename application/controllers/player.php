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
		foreach ($other as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		
		}
		$others = array('khac'=>$other);


		$list_view = $this->New_model->listview();
		foreach ($list_view as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		}

		$list_views = array('view'=>$list_view);

		$menu = $this->New_model->menu();
		$datatitle = array('mains'=>$menu);
		//print_r($main);die;

		$cate_video = $this->New_model->video();
		

		foreach ($cate_video as &$value) {
				# code...
				$value['title-url'] = $this->change_string($value['title']);
				$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
				$value['title-url'] = str_replace(' ', '-',$value['title-url']);

		}
		$v = array_shift($cate_video);
		//print_r($v);die;
		$cate_data = array(
			'd_data'=>$cate_video,
			'first_roat'=>$v
			);
		//print_r($cate_data);die;
		$cate_photo = $this->New_model->photo();
		

		foreach ($cate_photo as &$value) {
				# code...
				$value['title-url'] = $this->change_string($value['title']);
				$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
				$value['title-url'] = str_replace(' ', '-',$value['title-url']);

		}
		$p_data = array_shift($cate_photo);
		//print_r($v);die;
		$photo_data = array(
			'p_data'=>$cate_photo,
			'img_row'=>$p_data
			);



		$datatitle['page_title'] = 'The thao cap nhat';
		$this->load->view('teamplate/header',$datatitle);
		$this->load->view('player/index',$data);
		$this->load->view('player/other',$others);
		$this->load->view('player/photo',$img);
		$this->load->view('player/video',$media);
		$this->load->view('teamplate/catevideo',$cate_data);
		$this->load->view('teamplate/chuyennhuong',$photo_data);
		$this->load->view('teamplate/content',$cate_data);
		$this->load->view('teamplate/right',$list_views);
		$this->load->view('teamplate/footer');
	}
	public function view($title,$id){			
		
		$this->load->model('New_model');
		$v_data = $this->New_model->getdata($id);	
		$this->New_model->total_view($id);
		$dataview = array(
			'value'=>$v_data
			);
		//print_r($dataview);die;

		$list_view = $this->New_model->listview();
		foreach ($list_view as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		}

		$list_views = array('view'=>$list_view);

		$menu = $this->New_model->menu();
		$datatitle = array('mains'=>$menu);
		$datatitle['page_title'] = 'The thao cap nhat- detail';

		$this->load->view('teamplate/header',$datatitle,$dataview);
		$this->load->view('player/view',$dataview);
		$this->load->view('teamplate/right',$list_views);
		$this->load->view('teamplate/footer');
	}
	public function category($id){
		
		$this->load->model('New_model');
		$view_cate = $this->New_model->getview($id);
		foreach ($view_cate as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		}
		
		
		$data = array(
			'c_data'=>$view_cate,
			);

		$list_view = $this->New_model->listview();
		foreach ($list_view as &$value) {
		$value['title-url'] = $this->change_string($value['title']);
		$value['title-url'] = preg_replace('/[^a-zA-Z0-9-\s]/','', $value['title-url']);
		$value['title-url'] = str_replace(' ', '-',$value['title-url']);
		}

		$list_views = array('view'=>$list_view);

		$menu = $this->New_model->menu();
		$datatitle = array('mains'=>$menu);
		$datatitle['page_title'] = 'The thao cap nhat';
		$this->load->view('teamplate/header',$datatitle);
		$this->load->view('player/category',$data);
		$this->load->view('teamplate/right',$list_views);
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