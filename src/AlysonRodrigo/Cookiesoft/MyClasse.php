<?php
/**
 * Created by PhpStorm.
 * User: Cookiesoft
 * Date: 10/11/2017
 * Time: 21:24
 */

namespace AlysonRodrigo\Cookiesoft;


class MyClasse
{

    private $projeto_name;

    public function __construct($proj_name)
    {

        $this->projeto_name = $proj_name;
    }

    public function seuProjeto(){
        echo "O nome do seu projeto é: " + $this->projeto_name;
    }
}