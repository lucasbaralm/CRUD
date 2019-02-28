<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index()
	{
		$this->load->view('login');
    }

    public function home(){
		$this->load->model("funcionarios_model");
		$funcionarios = $this->funcionarios_model->buscaTodos();
		$dados = array("funcionarios" => $funcionarios);
		$this->load->view("home.php",$dados);
	}
	
	public function delete($email) {
        $this->load->model("funcionarios_model");
        if ($this->funcionarios_model->deletar($email)) {
            //$this->session->set_flashdata("success", "funcionario excluído com sucesso!");
            redirect("user/home");
        } else {
            //$this->session->set_flashdata("danger", "Não foi possível excluir este funcionario!");
            $this->load->view("user/home");
        }
	}
	
	public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nome", "nome", "required");
        $this->form_validation->set_rules("email", "email", "required|valid_email");
		$this->form_validation->set_rules("endereco", "endereco", "required");
		$this->form_validation->set_rules("telefone", "telefone", "required|integer");
        $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");
        $sucesso = $this->form_validation->run();
        if ($sucesso) {
            $funcionario = array(
                "nome" => $this->input->post("nome"),  
                "email" => $this->input->post("email"),
				"endereco" => $this->input->post("endereco"),
				"telefone" => $this->input->post("telefone"),
            );
            $this->load->model("funcionarios_model");
            $this->funcionarios_model->adicionar($funcionario);
           // $this->session->set_flashdata("success", "Funcionário salvo com sucesso!");
            redirect("user/home");
        } else {
            $this->load->view("formulario");
        }
    }

    public function editar(){
        $email = $this->input->get("email");
        $this->load->model("funcionarios_model");
        $funcionario = $this->funcionarios_model->busca($email);
    }
    
    public function salvar($email){
        $this->load->model("funcionarios_model");
        $this->funcionarios_model->salvar($email);
        //$this->session->set_flashdata('success', 'Funcionário alterado com sucesso.');
        redirect("user/home");
    }
}