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
        $nota1 = 7;
        $nota2 = 10;
        $nota3 = 4;

        $media = ($nota1 + $nota2 + $nota3) / 3
        ?>

        <p>A média é : <?= $media ?></p>

        <?php
        if ($media >= 7) { ?>
            <p class="bg-primary">Aprovado!</p>
        <?php } else { ?>
            <p class="bg-danger">Reprovado!</p>
        <?php } ?>

        <?php
        function calcularMedia($nota1, $nota2, $nota3)
        {
            return ($nota1 + $nota2 + $nota3) / 3;
        }
        ?>

        <p>Média: <?= $media ?></p>
        <p> Situação: <?= situacaoDoAluno($media) ?></p>

        <?php
        function situacaoDoAluno(float $media): string
        {
            if ($media >= 7) {
                return "Aprovado!";
            } else {
                return "Reprovado!";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>