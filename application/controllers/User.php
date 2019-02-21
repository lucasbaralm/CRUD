<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index()
	{
		$this->load->view('login');
    }

    public function home(){
        $this->load->database();
		$this->load->model("funcionarios_model");
		$funcionarios = $this->funcionarios_model->buscaTodos();
		$dados = array("funcionarios" => $funcionarios);
		$this->load->view("home.php",$dados);
    }
    
}