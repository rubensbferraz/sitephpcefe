<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{

    private $Db;

    #Cadastrará os clientes no Sistema
    protected function cadastroClientes()
    {
        $this->Db=$this->conexaoDB()->prepare("insert into teste values(:id , :nome, :sexo, :cidade)");
        
    }

}

?>