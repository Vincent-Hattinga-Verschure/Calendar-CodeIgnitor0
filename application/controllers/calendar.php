<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	//------------------------------------------------------------------------------------------------------
	//Create Functie.
	public function create_birthday(){

		$this->load->model('calendar_model');

		$this->load->view('calendar/create');

		// $this->load->view('calandar/index');

	
                  
        // if($this->input->post("submit")){
        //    $this->calendar_model->process();                
        //    }
        //    redirect(calendar/show);
    }
        

    //function save(){
//------------------------------------------------------------------------------------------------------
	//Create Functie. BEZIG

	public function save_create(){

		echo 'Je zit in de create_save functie!';

		$this->load->model('calendar_model');

		// $this->load->view('calandar/index');

		$this->calendar_model->get_birthday($id);
		
		$this->show();



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

		$this->load->view('calendar/update', $data);
		
	}


	//------------------------------------------------------------------------------------------------------
	//Oplaan van data nadat de form in update form is aangepast. Functie.


	public function edit_save($data){

		$this->load->model('calendar_model');

		$this->calendar_model->edit_save($data);
		
		$this->show();

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