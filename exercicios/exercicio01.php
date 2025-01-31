<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 PHP e HTML</title>
    <style>
        .texto {
            font-style: italic;
            color: red;
        }
    </style>
</head>
<body>
   <h1>Exercicio 01</h1>
   <hr>
   
<?php
// Definindo o timezone (fuso horário)
date_default_timezone_set("America/Sao_Paulo");

//$data = "30/01/2025";
$data = date("d/m/Y");
$hora = date("H:i");
echo $data. " - ". $hora;

$nome = "Joao Pedro";
$curso = "PHP";
$cargaHoraria = 100;
$limiteDeFaltas = $cargaHoraria * 0.25; // ou $cargaHoraria / 4
  
?>

<p>Meu nome é <u class="texto"><?=$nome?></u> estou fazendo <u class="texto"><?=$curso?></u> no dia <u class="texto"><?=$data?></u> a carga horária é de <u class="texto"><?=$cargaHoraria?> Horas</u> e o limite de faltas é <u class="texto"><?=$limiteDeFaltas?></u></p>

<hr>

<?php
/* Diferenças entre const/define e variável */
$exemplo = 10;
echo $exemplo;

echo "<br></br>";

$exemplo = 150;
echo $exemplo;

echo "<br></br>";

// CONSTATNTE
const EXEMPLO = 10;
echo EXEMPLO;

//EXEMPLO = 200; // dá erro pois constantes NÃO PODEM SER MODIFICADAS
//echo EXEMPLO;
?>

</body>
</html>