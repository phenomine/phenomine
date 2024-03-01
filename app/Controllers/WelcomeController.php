<?php

namespace App\Controllers;

use App\Models\Student;
use App\Models\User;
use Phenomine\Support\Collection;

class WelcomeController {
    public function index()
    {
        return view('welcome');
    }
}
