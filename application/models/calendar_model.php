<?php

class Calendar_model extends CI_Model{
	//------------------------------------------------------------------------------------------------------
	//Create Functie
	public function create_birthday($data){

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


	public function get_birthday($id){

		$query = $this->db->get_where('birthdays', array("id" => $id));

		return $query->result();

	}

	//------------------------------------------------------------------------------------------------------
	//Edit Functie

	public function edit_birthdays($data, $id){
		
		$this->db->set(['id' => $id]);


		$this->db->update('birthdays');
	}

	//------------------------------------------------------------------------------------------------------
	//Save Functie

//-----------------------BEZIG
	public function edit_save($data){

		// $this->db->set('birthdays', $birthday);

		$this->db->insert('birthdays', $data);

	}

	//------------------------------------------------------------------------------------------------------
	//Delete Functie

	public function delete_birthday($id){

		$this->db->where(['id' => $id]);

   		$this->db->delete('birthdays'); 

	}

}

