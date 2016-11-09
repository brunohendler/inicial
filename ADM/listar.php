<?php
/**
 * Created by PhpStorm.
 * User: LeoSorgetz
 * Date: 26/09/2016
 * Time: 18:50
 */
include_once '../cls/user.php';
include_once '../cls/conexao.php';

$usuario = new user();
$usuario->mostrar();
?>
<style>
    label#naosei {
        font-size: 30px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <label id="naosei">Lista de Clientes - </label> &nbsp; &nbsp;
        <a href="principal.php?m=a" class="btn btn-success">Adicionar</a><br><br>
    </div>
</div>
<table class="table table-responsive" border="1">
    <thead>
    <tr>
        <td class="col-md-1"><b>Id</b></td>
        <td class="col-md-6"><b>Nome</b></td>
        <td class="col-md-2"><b>Endereço</b></td>
        <td class="col-md-2">Telefone</td>
        <td class="col-md-1"></td>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = $usuario->getConsulta();
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><? echo $row['id'] ?></td>
            <td><? echo $row['nome'] ?></td>
            <td><? echo $row['endereco'] ?></td>
            <td><? echo $row['tel'] ?></td>
            <td><a href="principal.php?m=editar&id=<?= $row['id']; ?>"
                   class="btn btn-primary">Editar</a></td>
            <td><a href="../ADM/delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">Apagar</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>