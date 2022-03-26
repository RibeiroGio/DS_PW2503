<?php
include "Conexao.php";
   class usuario{
      private int $id;
      private string $nome; 

       public function __construct(string $nome){
            $this->nome = $nome;
            
        }
        
       public function Cadastrar(){
            $conexao = new Conexao();
            $sql = "INSERT INTO
            usuario(nome)
            VALUES (:nome)";
            $pdo = $conexao->Conectar();
            $preparo = $pdo->prepare($sql);
            $preparo->bindParam(':nome', $this->nome);
            $preparo->execute();
        }


      public static function ListarTodos(){
         $conexao = new conexao();
         $sql = "SELECT * FROM usuario";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   }