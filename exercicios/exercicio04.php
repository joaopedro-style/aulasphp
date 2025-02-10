<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style> -->
        <!-- table { -->
            <!-- width: 70%; -->
            <!-- margin: 20px auto; -->
            <!-- border-collapse: collapse; -->
        <!-- } -->
        <!-- th, td { -->
            <!-- padding: 10px; -->
            <!-- border: 1px solid; -->
            <!-- text-align: center; -->
        <!-- } -->
        <!-- th { -->
            <!-- background-color: darkgrey; -->
        <!-- } -->
    <!-- </style> -->
</head>
<body>
    <div class="container">
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
?>
<table class="table table-dark table-striped">
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
<?php
$id = 1;
foreach ($linguagens as $linguagem => $descricao ) {
?>
    <tr>
    <td><?=$id++?></td>
    <td><?=$linguagem?></td>
    <td><?=$descricao?></td>
    </tr>
<?php
}
?>
</table>

<!-- segunda versão -->
<?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
];
?>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
<?php
$id = 1;
foreach ($linguagens as $linguagem ) {
?>
    <tr>
    <td><?=$linguagem["id"]?></td>
    <td><?=$linguagem["nome"]?></td>
    <td><?=$linguagem["descricao"]?></td>
    </tr>
<?php
}
?>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>