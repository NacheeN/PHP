<?php

class m140707_173325_crear_estado_activo_inmueble extends CDbMigration
{
	public function up()
	{
		$this->addColumn("inmuebles", "activo","tinyint(1)");
	}

	public function down()
	{
		
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