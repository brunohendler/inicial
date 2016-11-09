
<?php


$precoInicialComputador = (float)2000;
$porcentagemDeVenda = (float)0.45; //porcentagem
$precoFinalComputador = $precoInicialComputador + ($precoInicialComputador * $porcentagemDeVenda);


$salarioBaseVendedor = (float)1000;
$porcentagemComissao = (float)0.20; //porcentagem
$impostoDeRenda = (float)0.08; //porcentagem
$salarioFinalVendedor = $salarioBaseVendedor + ($precoFinalComputador * $porcentagemComissao);
$salarioFinalVendedor = $salarioFinalVendedor - ($salarioFinalVendedor * $impostoDeRenda);

//formata os numeros
$precoInicialComputador = "R$ " . number_format($precoInicialComputador, 2, ',', '');
$precoFinalComputador = "R$ " . number_format($precoFinalComputador, 2, ',', '');
$salarioBaseVendedor = "R$ " . number_format($salarioBaseVendedor, 2, ',', '');
$salarioFinalVendedor = "R$ " . number_format($salarioFinalVendedor, 2, ',', '');

?>
<h1><b>Problema - </b></h1><br>

<table class="table table-responsive">
    <tr>
        <th colspan="2">Produtos</th>
    </tr>
    <tr>
        <td>Preço do computador</td>
        <td><?php echo $precoInicialComputador ?></td>
    </tr>
    <tr>
        <td>Porcentagem de lucro</td>
        <td><?php echo "45%" ?></td>
    </tr>
    <tr>
        <td>Valor final do computador</td>
        <td> <?php echo $precoFinalComputador ?></td>
    </tr>
</table>
<br>
<br>
<table class="table table-responsive">
    <tr>
        <th colspan="2">Funcionario</th>
    </tr>
    <tr>
        <td>Salario base</td>
        <td><?php echo $salarioBaseVendedor ?></td>
    </tr>
    <tr>
        <td>Comissão por venda</td>
        <td><?php echo "20%" ?></td>
    </tr>
    <tr>
        <td>Imposto de Renda</td>
        <td><?php echo "8%" ?></td>
    </tr>
    <tr>
        <td>Salario final do vendedor (baseado em uma venda)</td>
        <td><?php echo $salarioFinalVendedor ?></td>
    </tr>

</table>/