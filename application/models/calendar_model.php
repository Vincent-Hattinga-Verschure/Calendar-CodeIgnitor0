<?php

class Calendar_model extends CI_Model{
	//------------------------------------------------------------------------------------------------------
	//Create Function. Works

	public function create_birthday($data){


		$this->db->insert('birthdays', $data);
	}

	//------------------------------------------------------------------------------------------------------
	//Show Function. Works

	public function GetAll_birthdays(){


		$query = $this->db->query("SELECT * FROM birthdays ORDER BY day, month, year" );

		return $query->result();

	}

	//------------------------------------------------------------------------------------------------------
	//Create Birthdate. Works

	public function save_create1(){  


    $person=	$this->input->post('person');

    $day=		$this->input->post('day');

    $month=		$this->input->post('month');

    $year=		$this->input->post('year');

    $data = array(
            'person' => $person,
            'day' 	=> $day,
            'month' => $month,
            'year' => $year
        );

        $this->db->insert('birthdays', $data);
    }

	//------------------------------------------------------------------------------------------------------
	//Get birthdays. Works

	public function get_birthday($id){


		$this->db->select('*');

		$this->db->from('birthdays');

		$this->db->where('id', $id);

		$query = $this->db->get();

		return $query->result();

	}



	//------------------------------------------------------------------------------------------------------
	//Edit Function. Works

	public function edit_birthdays($data, $id){


		$this->db->set('person', $data->person);
		
		$this->db->where('id', $id);
		
		$this->db->update('birthdays');

	}

	//------------------------------------------------------------------------------------------------------
	//Save Function. Works

	public function edit_save($data){


		$person =  $this->input->post('person');

		$day = $this->input->post('day');

		$month = $this->input->post('month');

		$year = $this->input->post('year');

		$this->db->set('person', $person);

		$this->db->set('day', $day);

		$this->db->set('month', $month);

		$this->db->set('year', $year);

		$this->db->where('id', $data);

		$this->db->update('birthdays');

	}

	//------------------------------------------------------------------------------------------------------
	//Delete Function. Still working on!

	public function delete_birthday($id){


		$this->db->where('id', $id);

   		$this->db->delete('birthdays', $id); 
	}

}

