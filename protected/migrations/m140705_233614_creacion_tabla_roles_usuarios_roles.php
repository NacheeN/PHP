<?php

class m140705_233614_creacion_tabla_roles_usuarios_roles extends CDbMigration
{
	public function safeUp()
	{
		//create the issue table
		$this->createTable('roles', array(
		'id' => 'pk',
		'nombre' => 'string NOT NULL',
		), 'ENGINE=InnoDB');

		$this->addColumn("usuarios", "id_rol","int(11)");

		$this->addForeignKey("fk_roles_usuarios", "usuarios", "id_rol", "roles", "id", "CASCADE", "RESTRICT");

		$this->insert("roles", array('id'=>'1', 'nombre'=>'Administrador'));
		$this->insert("roles", array('id'=>'2', 'nombre'=>'Administrativo'));
		$this->insert("roles", array('id'=>'3', 'nombre'=>'Agente'));

	}

	public function safeDown()
	{
		echo "m140705_233614_creacion_tabla_roles_usuarios_roles does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}