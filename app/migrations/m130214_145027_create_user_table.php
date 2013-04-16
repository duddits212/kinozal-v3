<?php

class m130214_145027_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->execute("CREATE TABLE `user` (
			`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(255) NOT NULL,
			`salt` VARCHAR(255) NOT NULL,
			`password` VARCHAR(255) NOT NULL,
			`passwordStrategy` VARCHAR(255) NOT NULL,
			`requiresNewPassword` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
			`createId` INT UNSIGNED NOT NULL,
			`createTime` DATETIME NOT NULL,
			`updateId` INT UNSIGNED NOT NULL,
			`updateTime` DATETIME NOT NULL,
			`status` INT NOT NULL DEFAULT '0',
			PRIMARY KEY (`id`)
		) COLLATE='utf8_general_ci' ENGINE=InnoDB;");
	}

	public function down()
	{
		$this->dropTable('user');
	}
}