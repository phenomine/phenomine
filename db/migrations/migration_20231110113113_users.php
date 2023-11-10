<?php

use Phenomine\Support\Database\Migration;

class migration_20231110113113_users extends Migration {
    protected $table = 'users';

    public function up() {
         $this->id();
         $this->string('name');
         $this->string('email')->unique();
    }

    public function down() {
        $this->dropTableIfExists();
    }
}
