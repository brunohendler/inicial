<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <title>LPW</title>
</head>
<body>


<header>
    <?php
        include "topo.php";
    ?>
</header>

    <nav>
        <div id="button">
            <ul>
                <li><a href="?m=h">Home</a></li>
                <li><a href="?m=f">Formulario</a></li>
                <li><a href="?m=l">Lista</a></li>
                <li><a href="?m=t">Tabela</a></li>
                <li><a href="?m=c">Lista clientes</a></li>
                <li><a href="?m=p">Problema</a></li>
            </ul>
        </div>


    </nav>


<section>
            <h2 style="padding-left: 250px; float: left; ">


            <?php
            if(!isset ($_GET['m'])){
                require_once("home.php");
            }else{
                switch($_REQUEST['m']){
                    case 'h':
                        require_once("home.php");
                        break;

                    case "f":
                        require_once("fomulario.php");
                        break;

                    case "l":
                        require_once("lista.php");
                        break;

                    case "t":
                        require_once("tabela.php");
                        break;

                    case "c":
                        require_once("lista_clientes.php");
                        break;

                    case "p":
                        require_once("problema.php");
                        break;


                }
            }
            ?>


</section>

    <footer>
        <a href="ADM/login.php">login</a>
    </footer>



</body>
</html>