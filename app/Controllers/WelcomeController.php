<?php

namespace App\Controllers;

use Phenomine\Support\View;

class WelcomeController {

        public function index($a)
        {
            $app = config('app.name');
            $text = 'Hello World ' . $a . ' from ' . $app . '!';
            View::render('welcome', [
                'text' => $text
            ]);
        }

        public function index2()
        {
            echo "Hello World 2!";
        }
}
