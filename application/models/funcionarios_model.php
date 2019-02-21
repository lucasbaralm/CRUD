<?php
class Funcionarios_model extends CI_Model {
	public function buscaTodos(){
		return $this->db->get("funcionarios")->result_array();
	}
}