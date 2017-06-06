<?php

namespace app\controllers;


class HomeController extends \Src\Http\Controller {
    
    public function view() {
        echo $this->service->render('template/welcome.twig', [
            'simple' => [
                'title' => 'simple-php',
                'data'  => date('Y'),
                'asset' => url('/public')
            ]
        ]);
        
        exit();
    }
    
}
