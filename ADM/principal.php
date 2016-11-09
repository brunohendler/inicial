<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>

    </style>
</head>
<body>

<div class="container">

    <header>
        <h1>Trabalho G1</h1>
    </header>

    <nav>
        <ul>
            <li><a href="?m=h">Home</a></li>
            <li><a href="?m=a">Cadastrar</a></li>
            <li><a href="?m=b">Listar</a></li>

        </ul>
    </nav>

    <article>

        <?php
        if(!isset ($_GET['m'])){
            require_once("principal.php");
        }else{
            switch($_REQUEST['m']){
                case 'h':
                    require_once("principal.php");
                    break;

                case "a":
                    require_once("form_cadastrar.php");
                    break;

                case "b":
                    require_once("listar.php");
                    break;
            }
        }
        ?>


    </article>

    <footer>Linguagem de programação web</footer>

</div>

</body>
</html>