<?php

namespace App\Controllers;

use Phenomine\Support\Request;

class WelcomeController {

        public function index()
        {
            return view('welcome');
        }

        public function test(?string $name = null, ?string $age = null) {
            // Get all params in route
            request()->params();

            // Get route param by name
            request()->params('name');

            // Get all request data
            request()->all();

            // Get request data by name
            request('name');
            request('name', 'John Doe'); // with default value
        }
}
