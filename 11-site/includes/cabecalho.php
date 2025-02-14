<?php
// Capturamos o nome do arquivo atualmente aberto
$pagina = basename($_SERVER["PHP_SELF"]);
echo $pagina;

// Analisamos o valor de $pagina pra determinar um título personalizado
switch ($pagina) {
    case 'index.php':
        $titulo = "Página Inicial";
        break;
    case 'cursos.php':
        $titulo = "Treinamentos";
        break;
    case 'duvidas.php':
        $titulo = "Dúvidas";
        break;
    default:
        $titulo = "Contato";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> - Site com PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1>Site com PHP</h1>

            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="cursos.php">Treinamentos</a>
                <a class="nav-link" href="duvidas.php">Dúvidas</a>
                <a class="nav-link" href="contato.php">Contato</a>
                <a class="nav-link disabled" aria-disabled="true"></a>
            </nav>
        </header>

        <main>