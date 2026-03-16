<?php

//echo "<br>_______________________________________________________________________<br>";
//$nome = "luisa";
//$idade = 17;
//$altura = 1.63;
//$endereco = "brasil";
//
//echo "nome: $nome, idade: $idade, altura: $altura, endereço: $endereco <br>";
//echo "nome: $nome, idade: $idade, endereço: $endereco";
//echo "<br>_______________________________________________________________________<br>";


//criar algoritmo para ver se essoa maior de 18 anos, se sim, imprimir na tela "vc ja maior idade, pode tirar habilitação" se não, imprimir na tela "vc nao maior idade, tem que esperar mais X anos", o X é a diferença de idade atual e mairidade.

$idade = 19;

if ($idade < 18) {
    echo "vc tem ", $idade, " anos, ainda é menor de idade, não pode tirar habilitação! <br>";
}

if ($idade > 18) {
    echo "vc tem ", $idade, " anos, vc é maior de idade, pode tirar habilitação!!!!";
}


?>
<style>
    body{
        background-color: hotpink;
        font-family: Ebrima;
    }
</style>
