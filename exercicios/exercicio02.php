<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 PHP e HTML:Arrays</title>
    <style>
        .dados-container {
            display: flex;
            justify-content: space-evenly;
            gap: 15px;
        }

        .dados-pessoa {
            border: 1px;
            padding: 15px;
            width: 25%;
            background-color: gainsboro;
            box-shadow: 0 7px 8px rgb(0, 0, 0, 0.2);
        }

        .dados h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <h1>Exercício 02</h1>
    <hr>

    <?php
    $dados1[0] = "Pessoa 1";
    $dados1[1] = "Pessoa1@hotmail.com";
    $dados1[2] = "1234567";
    $dados1[3] = 20;
    $dados1[4] = "masculino";
    $dados1[5] = "Sao Paulo";

    $dados2[0] = "Pessoa 2";
    $dados2[1] = "Pessoa2@gmail.com";
    $dados2[2] = "123458";
    $dados2[3] = 25;
    $dados2[4] = "feminino";
    $dados2[5] = "Rio de Janeiro";
    ?>
    <div class="dados-container">
        <div class="dados-pessoa">
            <h2>Dados da Pessoa 1</h2>
            <p>Nome: <?= $dados1[0] ?></p>
            <p>Email: <?= $dados1[1] ?></p>
            <p>Idade: <?= $dados1[3] ?></p>
            <p>Sexo: <?= $dados1[4] ?></p>
        </div>

        <div class="dados-pessoa">
            <h2>Dados da pessoa 2</h2>
            <p>Nome: <?= $dados2[0] ?></p>
            <p>Email: <?= $dados2[1] ?></p>
            <p>Idade: <?= $dados2[3] ?></p>
            <p>Sexo: <?= $dados2[4] ?></p>
        </div>
    </div>


    <!--<h2>Exercício 02 versão 02</h2>-->

    <?php
    //$pessoa1 = [
    //"usuario" => "Jon.oliva",
    //"email" => "Jon.oliva@savatage.com",
    //"senha" => "12131jdsjka_**",
    //"idade" => 65,
    //"sexo" => "masculino",
    //"cidade" => "São Paulo"
    //]

    //$pessoa2 = [
    //"usuario" => "ozzy.osbourne",
    //"email" => "ozzy.osbourne@blacksabbath.com",
    //"senha" => "123666aaaa",
    //"idade" => 70,
    //"sexo" => "masculino",
    //"cidade" => "Rio de janeiro"
    //];
    ?>

    <!--<section>
        <h2>Dados pessoa 1</h2>
         nome de usuario, email, idade e sexo -->
    <!--<p>Usuário: <?= $pessoa1["usuario"] ?></p>
        <p>E-mail:
            <a href="mailto:<?= $pessoa1["email"] ?>"><?= $pessoa1["email"] ?></a>
        </p>
        <p>Idade: <?= $pessoa1["idade"] ?> anos</p>
        <p>Sexo: <?= $pessoa1["sexo"] ?></p>
    </section>

    <section>
        <h2>Dados pessoa 2</h2>
         nome de usuario, email, idade e sexo 
        <p>Usuário: <?= $pessoa2["usuario"] ?></p>
        <p>E-mail:
            <a href="mailto:<?= $pessoa2["email"] ?>"><?= $pessoa1["email"] ?></a>
        </p>
        <p>Idade: <?= $pessoa2["idade"] ?> anos</p>
        <p>Sexo: <?= $pessoa2["sexo"] ?></p>
    </section> -->


</body>

</html>