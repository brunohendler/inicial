<?php

include "../cls/conexao.php";

$id = $_GET['id'];
$Oconn = new conexaoClass();
$Oconn->abrir_conexao();
$query = "DELETE FROM clientes WHERE id = $id ";
print "$query";

$conn = $Oconn->getConn();
if ($conn->query($query)) {
    echo "<script>location.href='principal.php?m=b';</script>";
} else {
    echo 'Não apagado.';
}