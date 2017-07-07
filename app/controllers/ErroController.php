<?php

namespace app\controllers;


class ErroController extends \Src\Http\Controller {
    
    public function view() {
        echo $this->service->render('template/erro.html', [
            'simple' => [
                'title' => 'Erro 404',
                'asset' => asset(),
                'base'  => url(),
                'ano'   => date('Y')
            ]
        ]);
    }
    
}

