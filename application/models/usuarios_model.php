<?php
class Usuarios_model extends CI_Model {

	public function buscaPorLoginESenha($login, $senha) {
		return $this->db->get_where("usuarios",array("email" => $login, "senha" => md5($senha)))->row_array();
    }

}