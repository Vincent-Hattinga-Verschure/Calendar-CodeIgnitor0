<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	//------------------------------------------------------------------------------------------------------
	//Create Functie.
	public function create_birthday(){

		$this->load->model('calendar_model');

		$this->load->view('calendar/create');

}

	//------------------------------------------------------------------------------------------------------
	//Read Functie.
	public function show(){

		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->GetAll_birthdays();

	
		$this->load->view('calendar/index', $data);

	}

	//------------------------------------------------------------------------------------------------------
	//Get one birthday.

	// public function show_birthday($id){

	// 	$this->load->model('calendar_model');

	// 	$this->load->view('calendar/index', $data);

	// }

	//------------------------------------------------------------------------------------------------------
	//Edit Functie.

	public function edit_birthdays($id){
		
		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->get_birthday($id)[0];

		var_dump($data);


		$this->load->view('calendar/update', $data);
		
	}


	//------------------------------------------------------------------------------------------------------
	//Oplaan van data nadat de form in update form is aangepast. Functie.


	public function edit_save($data){
		
		$this->db->set('birthday', $data);


		$this->db->insert('birthdays', $data);

	}
	//------------------------------------------------------------------------------------------------------
	//Delete Functie.

	public function delete_birthday($id){

		$this->load->model('calendar_model');

		// pass the $id to the row_delete() method.
		$this->calendar_model->delete_birthday($id);

		redirect($_SERVER['HTTP_REFERER']);

	}

}


?>