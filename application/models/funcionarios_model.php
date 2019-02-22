<?php
class Funcionarios_model extends CI_Model {
	public function buscaTodos(){
		return $this->db->get("funcionarios")->result_array();
	}

	public function deletar($email){
		$funcionario = $this->busca($email);
        $this->db->where('email', $email);
        return $this->db->delete("funcionarios");
	}

	public function busca($email){
        $this->db->where('email',$email);
        return $this->db->get("funcionarios")->row_array();
	}
	
	public function adicionar($funcionario) {
		return $this->db->insert("funcionarios", $funcionario) ;
 }

}