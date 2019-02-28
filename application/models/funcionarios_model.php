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

 	public function salvar(){
 		$email = $this->input->post('email');

 		$funcionario = array(
 			'nome' => $this->input->post('nome'),
 			'email' => $this->input->post('email'),
 			'endereco' => $this->input->post("endereco"),
			'telefone' => $this->input->post("telefone"),
 		);

 		$this->db->where('email', $email);
 		return $this->db->update('funcionarios', $funcionario);
 	}

}