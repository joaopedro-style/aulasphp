<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
    <h1>Exercíco 03 (Condicionais)</h1>
    <hr>

<?php
$compra = 7000;

if ($compra > 5000) {
    $desconto = 0.15;
} elseif ($compra > 3000) {
    $desconto = 0.10;
} elseif ($compra > 1000) {
    $desconto = 0.5;
} else {
    $desconto = 0;
}

$valorFinal = $compra - $compra * $desconto;
?>
<p>Valor final da compra é: <?=$valorFinal?></p>

<body>

</body>

</html>