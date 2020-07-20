<?
header("Content-Type: text/html; charset=ISO-8859-1");
$servidor = 'localhost';
$banco	  = 'guiaphp';
$usuario  = 'root';
$senha    = 'root';
$link     = mysql_connect($servidor, $usuario, $senha);
$db		  = mysql_select_db($banco,$link);
if(!$link)
{
	echo "erro ao conectar ao banco de dados!";exit();
}

mysql_query("INSERT INTO `tutorial`(`tutorial_id`, `titulo`, `descricao`, `publicado`) VALUES ('','Tнtulo do tutorial','descriзгo do tutorial aqui','0')");

?>