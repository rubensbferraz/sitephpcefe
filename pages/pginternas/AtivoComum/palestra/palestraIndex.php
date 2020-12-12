<!DOCTYPE html>
<html lang="pt-br">
<?php

use \Classes\ClassListaPalestraSemana; ?>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="container my-2">
        <span class="text-center col-md">Palestras em Nossa Casa</span>
        <div class="row mb-2">
            <div class="card col-md-6 p-2 rounded shadow-sm">
                <div class="">
                    <div class="col p-2 d-flex flex-column position-static">
                        <?php //include("visualSemanaDomingo.php"); 
                        ?>
                        <?php $dom = new ClassListaPalestraSemana();
                        $dom->listaPalestraDomingo();
                        var_dump($dom);
                        ?>
                    </div>
                </div>
            </div>
            <div class="card col-md-6 p-2 rounded shadow-sm">
                <div class="">
                    <div class="col p-2 d-flex flex-column position-static">
                        <?php
                        //include("visualSemanaSexta.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>