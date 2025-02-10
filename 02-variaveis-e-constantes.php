<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Usando variáveis e constantes</h1>
        <hr>

        <?php
        /*Variáveis*/
        $curso = "Téc. em Informática para Internet";   // string
        $ano = 2025; // inteiro
        $preco = 2500.25; // real (float, decimal)

        echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";

        // usando concatenação
        echo "<p>Estamos no curso " . $curso . " no ano letivo de " . $ano . "</p>";
        echo '<p>Estamos no curso ' . $curso . ' no ano letivo de ' . $ano . '</p>';

        // Interpolação (OBRIGATÓRIO ASPAS DUPLAS)
        echo "<p>Estamos no curso $curso  no ano letivo de $ano</p>";

        // com aspas simples, interpolação NÃO FUNCIONA (vira texto)
        echo '<p>Estamos no curso $curso  no ano letivo de $ano</p>';
        ?>
        <hr>

        <h2>Saída de dados usando echo na sintaxe ABREVIADA/CURTA</h2>
        <p>Estamos no curso <b class="cor"><?= $curso ?></b> no ano letivo de <?= $ano ?> </p>

        <hr>

        <?php
        /* Constantes (recomenda-se nomeá-las usando MAIÚSCULAS) */

        // Sintaxe 1 (mais antiga): usando a função define()
        define("MEU_NOME", "Joao Pedro A. de Paiva");

        // Sintaxe 2 (mais moderna): usando a palavra-chave const
        const UNIDADE = "Penha";
        ?>
        <h2>Saída de dados constantes</h2>
        <p>Me chamo <?= MEU_NOME ?> e estou no senac <?= UNIDADE ?> </p>

        <h2>Sintaxe heredoc e nowdoc</h2>
        <p><i>Úteis para strings de mútiplas linhas</i></p>

        <?php
        // Exemplo usando heredoc
        $nome = "Fulano da silva";

        $textoHeredoc = <<<TEXTO
<ul>
    <li>nome: $nome</li>
    <li style="color:red">Texto com CSS</li>
</ul>    
TEXTO;

        // Exemplo Nowdoc (Somente para string/texto... não interpreta variáveis)
        $comida = "Lasanha";

        $textoNowdoc = <<<'TEXTO'
    Olá! Bem-vindo(a) ao PHP.
    Estamos testando a sintaxe <b>nowdoc</b>.
    Eu adoro $comida.
TEXTO;
        ?>
        <div>
            <h3>Saída com heredoc</h3>
            <?= $textoHeredoc ?>
        </div>

        <div>
            <h3>Saída com nowdoc</h3>
            <?= $textoNowdoc ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>