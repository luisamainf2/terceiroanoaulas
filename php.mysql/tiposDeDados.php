
<?php
// inteiros
$ano = 2025;
echo $ano;
echo "<br>";
?>

<?php
// ponto flutuante
$pi = 3.14159;
echo "valor de PI: $pi";
?>

<?php
$nome = "luluchannelauau";
$cpf = "67998765432";
echo $nome . ' CPF ' . $cpf;


// boolean
$idade = 17;

if ($idade == true) {
    echo "<br>" . $idade;
}
// arrays --> armazena muitas informações em uma variável

//arrays indexados --> elementos armazenados com indice numérico automático começando do zero
$nomes = ["lulu","channel","auau"];
foreach ($nomes as $nome) {
    echo "<br>" . $nome;
}


echo "<br>------------------------------------------------------<br>";



// arrays associativas --> em vez de usar números, usam chaves nomeadas

$aluno = [
    "nome" => "lulu",
    "idade" => 17,
    "curso" => "informática",
    "escola" => "maria luiza"
];

//acessando valores pelas chaves
echo $aluno["nome"] . "<br>";
echo $aluno["idade"] . "<br>";
echo $aluno["curso"] . "<br>";
echo $aluno["escola"] . "<br>";

echo "<br>-----------------------------------------------------<br>";
foreach ($aluno as $curso){

}





echo $meunome = "luisalinda";
echo "<br>";
echo $idade = 17;
echo "<br>";
echo $altura = 1.63;



$estudante = "estudante";

if ($estudante == true) {
    echo "<br>" . $estudante;
}

echo "<br>";

$nomee = ["luisalinda",17,1.63];
foreach ($nomee as $nomee)
    echo "<br>" . $nomee;



