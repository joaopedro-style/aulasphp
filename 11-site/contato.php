<?php include "includes/cabecalho.php" ?>

<h2>Página de Contato</h2>
<p>Entre em contato conosco:</p>

<form action="">
    <div class="mb-3">
        <label class="form-label" for="nome">nome:</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="mb-3">
        <label class="form-label" for="email">E-mail:</label>
        <input class="form-control" type="email" name="email">
    </div>

    <button class="btn btn-primary my-3" id="my-form-button" type="submit">Enviar</button>
</form>

<?php include "includes/rodape.php"; ?>