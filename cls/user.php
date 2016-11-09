<?php
    class user
    {

        var $resultado;


        public function consulta($nome_login){
            $Oconn= new conexaoClass();
            $Oconn ->abrir_conexao();
            $sql = "SELECT * FROM usuarios WHERE usuario='".$nome_login." ' ";

            $Oconn = $Oconn->getconn();
            $this ->resultado = $Oconn -> query($sql);
        }

        public function getconsulta(){
            return $this -> resultado;
        }

        public function mostrar(){
            $Oconn = new conexaoClass();
            $Oconn->abrir_conexao();
            $sql = 'SELECT * FROM clientes';
            $conn  = $Oconn->getconn();
            $this -> resultado = $conn-> query($sql);

        }


    }

?>