<?php

namespace app\controllers;


class WelcomeController extends \app\controllers\Controller {
    
    public function view() {
        echo $this->twig->render('template/welcome.html', [
            'title' => 'simple-php',
            'asset' => asset(),
            'ano'   => date('Y'),
        ]);
    }
    
}
