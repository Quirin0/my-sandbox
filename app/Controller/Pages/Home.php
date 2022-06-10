<?php

namespace App\Controller\Pages;

use \App\View\Classes\View;

class Home extends Modelo{

    public static function getHome(){
        $content = View::render('pages/home', [
            "name" => NULL ?? "Mundo"
        ]);

        return Modelo::getModelo('Pagina inicial', $content);
    }
}