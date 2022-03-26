<?php
include "Conexao.php";
   class save{
      private $id;
      private $save_fase; 
      private $save_item;

      public static function ListarTodos(){
         $conexao = new conexao();
         $sql = "SELECT * FROM save";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   }
   
   

include "Conexao.php";
   class save{
       private int $id;
       private int $save_fase; 
       private BIT $save_item; 

       public function __construct(int $save_fase; ,int $save_item;){
            $this->save_fase = $save_fase;
            $this->save_item = $save_item; 

        }
       public function Cadastrar(){
            $conexao = new Conexao();
            $sql = "INSERT INTO
            usuario(save_fase, save_item)
            VALUES (:save_fase, :save_item)";
            $pdo = $conexao->Conectar();
            $preparo = $pdo->prepare($sql);
            $preparo->bindParam(':save_fase', $this->save_fase);
            $preparo->bindParam(':save_item', $this->save_item);
            $preparo->execute();
        }


      public static function ListarTodos(){
         $conexao = new conexao();
         $sql = "SELECT * FROM save";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   }