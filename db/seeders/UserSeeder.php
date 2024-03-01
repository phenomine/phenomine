<?php

use App\Models\User;
use Phenomine\Support\Seeder;

class UserSeeder extends Seeder {

    public function run() {
        User::create([
            'name' => 'Fahli Saputra',
            'email' => 'fahli@opensource.fahli.net'
        ]);
    }

}
