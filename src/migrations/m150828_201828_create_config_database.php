<?php

use yii\db\Migration;

class m150828_201828_create_config_database extends Migration
{

    public function up()
    {
        $db = \quoma\core\helpers\DbHelper::getDbName('db_config');

        $this->execute("CREATE DATABASE `$db`");
    }

    public function down()
    {
        $db = \quoma\core\helpers\DbHelper::getDbName('db_config');

        if (!YII_ENV_PROD) {
            $this->execute("DROP DATABASE `$db`");
        }
    }

}
