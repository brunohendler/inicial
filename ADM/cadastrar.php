<?php

include "../cls/conexao.php";
include_once '../cls/user.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
}

if (isset($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
}
if (isset($_POST['telefone'])) {
    $telefone = $_POST['telefone'];
}

if (!(empty($nome)) && !(empty($endereco)) && !(empty($telefone))) {
    $Oconn = new conexaoClass();
    $Oconn->abrir_conexao();
    $query = "INSERT INTO clientes(nome, endereco, tel) VALUES ('" . $nome . "','" . $endereco . "','" . $telefone . "');";
    $conn = $Oconn->getConn();
    if ($conn->query($query)) {
        echo 'Inserido com sucesso.';
        echo "<script>location.href='principal.php';</script>";
    } else {
        echo 'Não inserido.';
    }
} else {
    echo "Preencha os campos.";
}

?>