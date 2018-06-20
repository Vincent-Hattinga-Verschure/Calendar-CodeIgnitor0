<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['birthdays'] = "Hello";
	
		$this->load->view('calendar', $data);
	}
}

		//$this->load->model('user_model');



?>
