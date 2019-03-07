<?php
class Migration_Cria_tabela_usuarios extends CI_migration {
	public function up(){
		$this->dbforge->add_field(array(
			'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
			'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
		));
		$this->dbforge->add_key('email', true);
		$this->dbforge->create_table('usuarios');
		$data = array('email' => 'admin',
			'password' => md5("admin"));
			
		$this->db->insert_batch('usuarios', $data);
	}

	public function down(){
		$this->dbforge->drop_table('usuarios');
	}
}