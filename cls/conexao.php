<?php

class conexaoClass
{

    var $conn; //propriedade

    function abrir_conexao()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lpw";


        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    function getconn()
    {
        return $this->conn;
    }


}
?>