<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Exercício 05 (Funções)</h1>

        <hr>

        <?php
        $listaDeAlunos = [
            [
                "nome" => "Fulano 1",
                "nota1" => 5,
                "nota2" => 7,
                "nota3" => 8
            ],

            [
                "nome" => "Fulano 2",
                "nota1" => 9,
                "nota2" => 10,
                "nota3" => 6
            ],

            [
                "nome" => "Fulano 3",
                "nota1" => 0,
                "nota2" => 9,
                "nota3" => 4
            ],

            [
                "nome" => "Fulano 4",
                "nota1" => 2,
                "nota2" => 10,
                "nota3" => 8
            ],

            [
                "nome" => "Fulano 5",
                "nota1" => 10,
                "nota2" => 7,
                "nota3" => 9
            ]
        ];
        ?>

        <?php
        foreach ($listaDeAlunos as $aluno) {
            $media = calcularMedia($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]);
            $situacao = verificarsituacao($media);
        ?>
            <ul class="list-group my-5">
                <li class="list-group-item">Nome do aluno: <?= $aluno["nome"] ?> </li>
                <li class="list-group-item">Nota 1: <?= $aluno["nota1"] ?></li>
                <li class="list-group-item">Nota 2: <?= $aluno["nota2"] ?> </li>
                <li class="list-group-item">Nota 3: <?= $aluno["nota3"] ?> </li>
                <li class="list-group-item">Média: <?= number_format($media, 2, ",") ?></li>
                <li class="list-group-item">Situação: <span class="badge text-bg-<?= $media >= 7 ? 'success' : 'danger' ?>"><?= verificarsituacao($media) ?></span></li>
            </ul>

        <?php
        }
        ?>

        <?php
        $nota1 = 7;
        $nota2 = 10;
        $nota3 = 4.5;

        $media = calcularMedia($nota1, $nota2, $nota3);
        $situacao = verificarsituacao($media);
        ?>

        <p>A média é : <?= number_format($media, 2, ",") ?></p>

        <?php
        if ($media >= 7) { ?>
            <p class="bg-success">Aprovado!</p>
        <?php } else { ?>
            <p class="bg-danger">Reprovado!</p>
        <?php } ?>

        <?php
        function calcularMedia(float $valornota1, float $valornota2, float $valornota3)
        {
            $resultadoDaMedia = ($valornota1 + $valornota2 + $valornota3) / 3;
            return $resultadoDaMedia;
        }
        ?>

        <p>Média: <?= number_format($media, 2, ",") ?></p>
        <p class="badge text-bg-<?= $media >= 7 ? 'success' : 'danger' ?>">Situação: <?= verificarsituacao($media) ?></p>

        <?php
        function verificarsituacao(float $media): string
        {
            return $media >= 7 ? "Aprovado!" : "Reprovado!";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>