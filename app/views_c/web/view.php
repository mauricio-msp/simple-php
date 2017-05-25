<?php

    /**
     * -------------------------------------------------------------------------
     * Twig Template Web 
     * -------------------------------------------------------------------------
     * 
     * Aqui é onde você registra a(s) página(s) que será(ão) renderizada(s) 
     * com seu(s) repectivo(s) dado(s) que deseja tratar na(s) mesma(s).
     */

    echo $twig->render('template/template.twig', [
        'title' => 'simplePHP - Twig Template',
        'alunos' => [
            ['nome' => 'Mauricio', 'email' => 'mauriciosporfirio@gmail.com'],
            ['nome' => 'Claudia', 'email' => 'claudiamfabris@gmail.com'],
            ['nome' => 'Dhonata', 'email' => 'dhonatafreitas@gmail.com'],
            ['nome' => 'Álvaro', 'email' => 'alvaro.lourenco46@gmail.com']
        ]
    ]);
    
    
    // Retorna a renderização
    return $twig;

