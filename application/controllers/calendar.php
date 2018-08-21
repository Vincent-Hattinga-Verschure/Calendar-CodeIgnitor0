<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	//------------------------------------------------------------------------------------------------------
	//Create Function. Works

	public function create_birthday(){


		$this->load->model('calendar_model');

		$this->load->view('calendar/create');

}
	//------------------------------------------------------------------------------------------------------
	//Create Function. Works

	public function save_create(){


		$this->load->model('calendar_model');

		$this->calendar_model->save_create1();
		
		$this->show();

	}



	//------------------------------------------------------------------------------------------------------
	//Read Function. Works

	public function show(){


		$this->load->model('calendar_model');

		$data['birthdays'] = $this->calendar_model->GetAll_birthdays();

		$this->load->view('calendar/index', $data);

	}


	//------------------------------------------------------------------------------------------------------
	//Edit Function. Works

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
	//Delete Function. Does'nt work! Don't know Why!

	public function delete_birthday($id){


		$this->load->model('calendar_model');

		$this->calendar_model->delete_birthday($id);

		redirect($_SERVER['HTTP_REFERER']);
	}

}

?>