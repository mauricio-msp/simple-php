<?php

namespace app\controllers;


class ErroController extends \Src\Http\Controller {
    
    public function view() {
        echo $this->service->render('template/erro.twig', [
            'simple' => [
                'title' => 'Erro 404',
                'data'  => date('Y'),
                'asset' => url('/public'),
                'base'  => url()
            ]
        ]);
    }
    
}

