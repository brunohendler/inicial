<?php
/**
 * Created by PhpStorm.
 * User: LeoSorgetz
 * Date: 26/09/2016
 * Time: 18:50
 */
include_once '../cls/user.php';
include_once '../cls/conexao.php';


$Oconn = new conexaoClass();
$Oconn->abrir_conexao();
$query = 'SELECT * FROM clientes WHERE id="' . $_GET['id'] . '"';
$conn = $Oconn->getConn();
$resultado = $conn->query($query);

$result = $resultado;
if ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $nome = $row['nome'];
    $tel = $row['telefone'];
    $end= $row['endereco'];
}
?>
<form method="post" action="../adm/e">
    <input type="hidden" value="<?= $id ?>" name="id_user">
    <div class="row form-group col-md-offset-4 col-md-4">
        <label for="usuario">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $user ?>">
    </div>
    <div class="row form-group  col-md-offset-4 col-md-4">
        <label for="senha">Senha:</label>
        <input type="text" class="form-control" id="senha" name="senha" value="<?= $senha ?>">
    </div>
    <div class="row form-group col-md-offset-4 col-md-4">
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="principal.php?m=lista" class="btn btn-default">Voltar</a>
    </div>
</form>