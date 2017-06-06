<?php

namespace app\controllers;


class HomeController extends \Src\Http\Controller {
    
    public function view() {
        echo $this->service->render('template/welcome.twig', [
            'nome'  => $this->request->name,
            'title' => 'simple-php',
            'data'  => date('Y'),
            'asset' => url('/public')
        ]);
        
        exit();
    }
    
}
