<?php session_start();



include "../cls/conexao.php";
include "../cls/user.php";

if(isset($_POST['usuario'])){
    $nome_usuario=$_POST['usuario'];
}
if(isset($_POST['senha'])){
    $senha_usuario=$_POST['senha'];
    }

if (!(empty($nome_usuario))or !(empty($senha_usuario))){
    $usuario = new user();
    $usuario->consulta($nome_usuario);
    $result = $usuario ->  getconsulta();
    if ($linha = $result -> fetch_assoc()) {

        $senha = $linha['senha'];
        if ($senha == $senha_usuario) {
            $_SESSION['id_usuario'] = $linha['id_usuario'];
            header('Location: principal.php');
        } else {
            print ('<p> Senha incorreta!</p>');

        }
    }else{
            print('<p>Usuario não confere! Tente novamente!</p>');
    }
}else{
     print('<p> Digite o nome de usuario e senha');
}
?>

</body>
</html>
