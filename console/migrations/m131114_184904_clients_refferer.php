<?php

class m131114_184904_clients_refferer extends CDbMigration {
    public function up() {
        $this->addColumn('clients', 'referrerUrl', 'string');
        $this->addColumn('clients', 'referrerKey', 'string');
    }

    public function down() {
        $this->dropColumn('clients', 'referrerUrl');
        $this->dropColumn   ('clients', 'referrerKey');
    }
}