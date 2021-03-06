<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/admin/login');
	}
	public function _example_output($output = null)
	{		
		$email = $this->session->userdata('email');
		$output->email = $email;
		$b_check = $this->session->userdata('logged_in');
		$this->load->view('admin/index.php',$output);
	}	

	// public function employees_management()
	// {
	// 		$crud = new grocery_CRUD();

	// 		$crud->set_theme('datatables');
	// 		$crud->set_table('employees');
	// 		$crud->set_relation('officeCode','offices','city');
	// 		$crud->display_as('officeCode','Office City');
	// 		$crud->set_subject('Employee');

	// 		$crud->required_fields('lastName');

	// 		$crud->set_field_upload('file_url','assets/uploads/files');

	// 		$output = $crud->render();

	// 		$this->_example_output($output);
	// }

	public function index()
	{		
			$b_check = $this->session->userdata('logged_in');
		
			if($b_check == FALSE){
				redirect(base_url('/admin/login'));
			}
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('news');	
			$crud->set_field_upload('image','public/images');	
			$crud->set_relation('category_id','categories','{name}');
			$crud->set_relation('type_id','types','{name}');
			$crud->display_as('category_id','the loai');
			$crud->display_as('viewed','view');
			$crud->display_as('created','date');
			$crud->display_as('modified','update');
			$crud->display_as('type_id','kiểu');
			$crud->required_fields('title','description','content','author');	
			$output = $crud->render();						

			$this->_example_output($output);
	}
	public function categories(){
		$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('categories');		
			$crud->display_as('name','the loai');
			$crud->display_as('type_id','kiểu');
			$crud->required_fields('title','description','content','author');	

			

			$output = $crud->render();						

			$this->_example_output($output);
	}
	public function type(){
			$crud = new Grocery_crud();
			$crud->set_theme('datatables');
			$crud->set_table('types');	
			$crud->set_relation('category_id','categories','{name}');
			$crud->display_as('category_id','the loai');
			$crud->display_as('name','kiểu');

			

			$output = $crud->render();						

			$this->_example_output($output);

	}
	public function user(){
			$crud = new Grocery_crud();
			$crud->set_theme('datatables');
			$crud->set_table('users');
			$crud->set_field_upload('img','public/images');	

			$output = $crud->render();						

			$this->_example_output($output);

	}
	public function login(){
		if($_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$this->load->model('User_model');
			$user_data = $this->User_model->checklogin($username,$password);
			//var_dump($user_data);die;
			if($user_data){
				$newdata = array(
                   'email'     => $username,
                   'logged_in' => TRUE

               );
				$this->session->set_userdata($newdata);
				redirect(base_url('/admin/index'));
			
			}else{
				?>
				<h1 style="margin:20px 0 0 300px;color:red;"><?php echo ("bạn đã đăng nhập sai Username hoặc Password");?></h1>
				<?php
			}
		}

		$this->load->view('login');
	}
	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}	
	

}