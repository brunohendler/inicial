<?php
include "cls/conexao.php";
include "cls/clientesClass.php";
$cliente = new clientesClass();
$cliente ->mostrar();
?>




        <?php

        $result = $cliente ->getConsulta();
        while ($linha = $result -> fetch_assoc()){
        ?>

            <table border="1" class="table table-condensed">
                <thead>
                <tr>
                    <th><?php echo $linha['id']; ?></th>
                    <th><?php echo $linha['nome'];?></th>
                    <th><?php echo $linha['tel']; ?></th>
                    <th><?php echo $linha['endereco']; ?></th>
                </tr>
                </thead>
            </table>





   <?php }?>