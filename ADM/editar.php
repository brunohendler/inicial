<?php

include "../cls/conexao.php";

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
}

if (isset($_POST['telefone'])) {
    $telefone = $_POST['telefone'];
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
}

if (!(empty($nome)) && !(empty($telefone)) && !(empty($id))&& !(empty($endereco))) {
    $Oconn = new conexaoClass();
    $Oconn->abrir_conexao();
    $query = "UPDATE clientes SET  id='" . $id . "' nome='" . $nome . "', telefone='" . $telefone . "', endereco='" . $endereco . "' WHERE id= " . $id . ";";
    $conn = $Oconn->getConn();
    if ($conn->query($query)) {
        echo 'Atualizado com sucesso.';
        header("location: principal.php?m=b");
    } else {
        echo 'Não Atualizado.';
    }
} else {
    echo "Preencha os campos.";
}
