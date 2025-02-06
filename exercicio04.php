<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h1>Exercício 04 (Loop e Estrutura de dados)</h1>
    <hr>

<?php
$linguagens =[
    "HTML5" => "HyperText Markup Language (Linguagem de Marcação de Hipertexto).",
    "CSS" => "(Cascading Style Sheets ou Folhas de Estilo em Cascata)",
    "JS" => "linguagem de programação de alto nível,",
    "PHP" => "Desenvolvimento Backend",
    "SQL" => "Manipulação de banco de dados",
    "JAVA" => "Java é uma linguagem de programação e plataforma de computação"
];

foreach ($linguagens as $linguagem => $descricao) {
?>
    <table>
        <tr>
            <th></th>
        </tr>
    </table>

<?php
}
?>
</body>
</html>