<?php
#Definindo a porta
#Arquivos diretórios raizes
//$PastaInterna = "sitephpcefe/";
$PastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretorio Específicos
define('DIRIMG', DIRPAGE . 'img/');
define('DIRCSS', DIRPAGE . 'css/');
define('DIRJS', DIRPAGE . 'js/');
define('DIRCONFIG', DIRPAGE . 'Config/');
define('DIRINCLUDE', DIRPAGE . 'Includes/');
define('DIRPAGES', DIRPAGE . 'pages/');

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "cefeemmanuel1");
define('USER', "root");
define('PASS', "crbf");
