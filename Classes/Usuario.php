<?php

namespace ProjetoFinal;

class Usuario
{
    private $id;
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    
    public function Inserir($nome, $usuario, $email, $senha)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=projeto_final","root","");

            $sql = "INSERT INTO usuarios (nome, usuario, email, senha) values (:nome, :usuario, :email, :senha)";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue(":email", $email);
            $preparar->bindValue(":senha", $senha);

            $resultado = $preparar->execute();

            if($resultado == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\PDOException $e)
        {
            echo "Erro na execução da query: ".$e->getMessage();
            return false;
        }
        
    }
}

//$u = new Usuario();
//$resultado = $u->Inserir("anderson serrano", "adnderson", "anderson@adn.com.br", "1234");
//echo $resultado;