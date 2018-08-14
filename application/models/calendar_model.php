<?php

class Calendar_model extends CI_Model{
	//------------------------------------------------------------------------------------------------------
	//Create Functie BEZIG
	public function create_birthday($data, $count, $id){

		$this->load->database();
		$count = $this->db->insert('birthdays', $data);



		// $this->db->insert('birthdays', $data);
	}

	public function insert_item($data){  

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
	//Show Functie

	public function GetAll_birthdays(){

		$query = $this->db->query("SELECT * FROM birthdays ORDER BY day, month, year" );

		return $query->result();

	}

	//------------------------------------------------------------------------------------------------------
	//Get one birthday


	public function get_birthday(){

		$this->db->select('*');

		$this->db->from('birthdays');

		$this->db->where('id'); // Hier zou eigenlijk nog een $id tussen moeten maar krijg steeds foutmeldingen waardoor ik 'm weg gehaald heb.

		$query = $this->db->get();

		return $query->result();

	}



	//------------------------------------------------------------------------------------------------------
	//Edit Functie

	public function edit_birthdays($data){

		$this->db->set('person', $data->person);

		$this->db->where('id', $id);

		$this->db->update('birthdays');

	}

	//------------------------------------------------------------------------------------------------------
	//Save Functie

//-----------------------BEZIG
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

	//UPDATE `birthdays` SET `person` = $person, `day` = $day, `month` = $month, `year` = $year WHERE `id` = ;

	//------------------------------------------------------------------------------------------------------
	//Delete Functie

	public function delete_birthday($id){

		$this->db->where(['id' => $id]);

   		$this->db->delete('birthdays'); 

	}

}

