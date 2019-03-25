<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	public function index(){
		//$this->load->model("Users_model");
		//print_r($this->Users_model->get_user_data("rhuan23"));
		//echo password_hash('123456',PASSWORD_DEFAULT);
		$data = array(
			"scripts" => array( 
				"util.js",
				"login.js"
			) 
		);
		$this->template->show('login.php',$data);	
	}
}
