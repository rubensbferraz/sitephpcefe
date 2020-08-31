<?php 
namespace App\Model;

abstract class ClassConexao
{

    // realiza a conexão com o banco de dados
    public function conexaoDB()
    {

        try{
            $conn=new \PDO("mysql:host=".HOST.";dbname=".DB."", "".USER."","".PASS."");
            return $conn;

        }catch(\PDOException $Erro){
            return $Erro->getMessage();
        }

    }

}

?>

