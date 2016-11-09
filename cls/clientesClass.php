<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 09/09/2016
 * Time: 20:14
 */
class clientesClass
{
    var $codigo;
    var $nome;
    var $telefone;
    var $endereco;
    var $resultado;


    public function mostrar(){
        $Oconn = new conexaoClass();
        $Oconn->abrir_conexao();
        $sql = 'SELECT * FROM clientes';
        $conn  = $Oconn->getconn();
        $this -> resultado = $conn-> query($sql);

    }
    public function getConsulta(){

        return $this ->resultado;
    }

    public function inserecliente($nome, $telefone, $endereco)
    {
        $Oconn = new conexaoClass();
        $Oconn -> abrir_conexao();
        $sql = "INSERT INTO clientes (nome, tel, endereco) VALUES ('$nome', '$telefone', '$endereco');";
        $conn = $Oconn -> getconn();
        $conn->query($sql);

    }
}