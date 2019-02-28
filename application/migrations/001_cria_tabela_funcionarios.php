<?php
class Migration_Cria_tabela_funcionarios extends CI_migration {
	public function up(){
		$this->dbforge->add_field(array(
			'nome' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
			'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
			'endereco' => array (
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
			'telefone' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			)
		));
		$this->dbforge->add_key('email', true);
		$this->dbforge->create_table('funcionarios');
	}

	public function down(){
		$this->dbforge->drop_table('funcionarios');
	}
}