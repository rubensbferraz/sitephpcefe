<?php

namespace Classes\servico;

use Trits\TraitUrlParser;

class ClassBreadcrumb
{

    use TraitUrlParser;

    #Crias os breadcrumbs do site
    public function addBreadcrumb()
    {
        $Contador = count($this->parseUrl());

        $ArreyLink[0] = '';

        echo "<a href=" . DIRPAGE . ">home</a> > ";

        for ($i = 0; $i < $Contador; $i++) {
            $ArreyLink[0] .= $this->parseUrl()[$i] . '/';
            echo "<a href=" . DIRPAGE . $ArreyLink[0] . ">" . $this->parseUrl()[$i] . "</a>";
            if ($i < $Contador - 1) {
                echo " > ";
            }
        }
    }
}
