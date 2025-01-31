<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
   <h1>Trabalhando com arrays</h1>
   <hr>
   
   <h2>Arrays numéricos/indexados</h2>
<?php
// sintaxe com colchetes
$bandas = ["Savatage", "Rush", "Slayer", "Pink Floyd"];

// Sintaxe com a função array()
$cursos = array("HTML5", "Node.js", "PHP", "SQL");

// Sintaxe de atribuição manual usando os ídices
$comidas[0] = "Bolinho de bacalhau";
$comidas[1] = "Pastel";
$comidas[2] = "Coxinha";

// Constantes de array
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Abacaxi"];
?> 
    <h3>Acessando os dados</h3>
    <ul>
        <li>Banda que mais curto: <?=$bandas[1]?></li>
        <li>Em breve vou lançar um curso de <?=$bandas[2]?></li>
        <li>Quero comer <?=$comidas[0]?></li>
        <li>Estamos no senac <?=UNIDADES[0]?></li>
        <li>Vou fazer uma Vitamina de <?=FRUTAS[1]?></li>
    </ul>

    <h2>Arrays associativos</h2>
<?php
$curso = [
    "titulo" => "Gastronomia",
    "carga_horaria" => 200,
    "descricao" => "Aprender a esquentar água e fazer ovo cozido..."
];
?>

    <h3>Acessando os dados</h3>
    <p>Nome do curso: <?=$curso["titulo"]?> </p>
    <p>Carga horária: <?=$curso["carga_horaria"]?> horas.</p>
    <p>Descrição: <?=$curso["descricao"]?> </p>

<?php
// array associativo usando constantes
define(
    "EMPRESA",
    [
        "nome" => "Biribinha Informática",
        "ano_fundacao" => 2021
    ]
);

echo EMPRESA["nome"];

echo "<br></br>";

const OUTRA_EMPRESA = ["nome" => "ABC TI", "ano_fundacao" => 2022];
echo OUTRA_EMPRESA["nome"];
?>

    <h2>Matriz (array dentro de array)</h2>
<?php
$planoDeEstudos = [
    ["JS avançado", "Node.js", "Next.js"],
    ["php", "Orientação a objetos"],
    ["Teoria das cores", "photoshop", "UX/UI", "Motion Design"]
];
?>
    <h3>Acessando os dados</h3>
    <p>Vou estudar nos próximos meses:
        <?=$planoDeEstudos[0][2]?>, <?=$planoDeEstudos[1][0]?> e
        <?=$planoDeEstudos[2][3]?>
    </p>

    <hr>

    <h2>Funções de análise/depuração/debug de estruturas de dados</h2>

    <h3><code>print_r()</code></h3>
    <pre> <?=print_r($bandas)?> </pre>

    <h3><code>var_dump()</code></h3>
    <pre> <?=var_dump($bandas)?> </pre>
    <pre> <?=var_dump($curso)?> </pre>


</body>
</html>
