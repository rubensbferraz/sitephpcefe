<?php

namespace Src\Traits;

trait TraitUrlParser{

    #Divide a url em um arrey

    public function parseUrl()
    {
        $Url = \explode('/', \rtrim($_GET['url']), FILTER_SANITIZE_URL);

        return $Url; 
             
    }
}

?>