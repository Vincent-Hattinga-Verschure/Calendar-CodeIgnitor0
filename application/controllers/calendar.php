<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	//------------------------------------------------------------------------------------------------------
	//Create Functie. Works
	public function create_birthday(){

		$this->load->model('calendar_model');

		$this->load->view('calendar/create');

}
	//------------------------------------------------------------------------------------------------------
	//Create Functie. Works

	public function save_create(){

		$this->load->model('calendar_model');

		$this->calendar_model->save_create();
		
		$this->show();

	}



//------------------------------------------------------------------------------------------------------
	//Read Functie. Works
	public function show(){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->GetAll_birthdays();

	
		$this->load->view('calendar/index', $data);

	}


	//------------------------------------------------------------------------------------------------------
	//Edit Functie. Works

	public function edit_birthdays($id){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->get_birthday($id)[0];

		$this->load->view('calendar/update', $data);
		
	}


	//------------------------------------------------------------------------------------------------------
	//Edit function saves after editing. Works


	public function edit_save($data){

		$this->load->model('calendar_model');

		$this->calendar_model->edit_save($data);
		
		$this->show();

	}
	//------------------------------------------------------------------------------------------------------
	//Delete Functie. Does'nt work! Don't no Why!
	public function delete_birthday($id){

		$this->load->model('calendar_model');

		// pass the $id to the row_delete() method.

		$this->calendar_model->delete_birthday($id);

		redirect($_SERVER['HTTP_REFERER']);
	}

}


?>