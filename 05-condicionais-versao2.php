<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(VERSÃO 2)PHP - Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style> -->
    <!-- .comprar { -->
    <!-- color: red; -->
    <!-- } -->

    <!-- .urgente { -->
    <!-- color: red; -->
    <!-- background-color: yellow; -->
    <!-- } -->

    <!-- .normal { -->
    <!-- color: darkgreen; -->
    <!-- } -->
    <!-- </style> -->
</head>

<body>
    <div class="container">
        <h1>(VERSÃO 2)Estruturas condicionais</h1>
        <hr>

        <h2>Simples usando <code>if</code></h2>

        <?php
        $numero = 5;
        if ($numero > 1) {
        ?>
            <p><?= $numero ?> é maior que 1</p>
        <?php
        }
        ?>
        <hr>
        <h2>Composta usando <code>if/else</code></h2>
        <?php
        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 1; // o que temos
        $qtdCritica = 5; // mínimo necessário
        ?>
        <h3><?= $produto ?></h3>
        <h4>Quantidade em estoque: <?= $qtdEmEstoque ?></h4>
        <?php
        if ($qtdEmEstoque < $qtdCritica) {
        ?>
            <p class="bg-warning">É necessario comprar!</p>

            <?php // Condicional ANINHADA
            if ($qtdEmEstoque === 0) :
            ?>
                <p class="bg-danger"><strong>🚨URGENTE🚨</strong></p>
            <?php
            endif;
        } else {
            ?>
            <p class="bg-success">Estoque normal</p>
        <?php
        }
        ?>
        <hr>
        <h2>Encadeada usando <code>if/elseif/else</code></h2>
        <!-- Verificar a idade de uma pessoa e determinar se ela é criança, adolescente, adulta ou idosa. -->

        <?php
        $idade = 65;
        if ($idade <= 12) {
            $texto = "Criança 👼";
        } elseif ($idade <= 17) {
            $texto = "Adolescente 😠";
        } elseif ($idade <= 59) {
            $texto = "Adulto 😯";
        } else {
            $texto = "Idoso 👴";
        }
        ?>
        <p><?= $texto ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>