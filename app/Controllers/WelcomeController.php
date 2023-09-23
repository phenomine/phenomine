<?php

namespace App\Controllers;

use Phenomine\Support\View;

class WelcomeController {

        public function index($a)
        {
            $app = config('app.name');
            $text = 'Hello World ' . $a . ' from ' . $app . '!';

            $view = new View();
            $view->render('welcome.index', [
                'text' => $text
            ]);
        }

        public function index2()
        {
            echo "Hello World 2!";
        }
}
