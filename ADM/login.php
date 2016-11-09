<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>LOGIN</title>

</head>
<body>

<div class="conteiner">

    <div class="row">

        <div class="col-md-4">


            <table id="login">

                <tr>
                    <td colspan="2">LOGIN</td>
                </tr>

                <form action="valida_login.php" method="POST" name="formulario" id="formulario">
                    <tr>
                        <td>Usuario: </td>
                        <td><input type="text" name="usuario" id="usuario"></td>
                    </tr>

                    <tr>
                        <td>Senha:   </td>
                        <td><input type="password" name="senha" id="senha"></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="enviar" id="entrar" value="Enviar">
                        </td>

                        <td>
                            <input type="reset" name="Limpar" id="limpar" value="Limpar">
                        </td>
                    </tr>
                </form>
            </table>

        </div>
    </div>
</div>


</body>
</html>
