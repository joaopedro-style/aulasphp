<?php
define("ESCOLA", "Senac"); // constante
$curso = "Téc. Informática para internet"; // variável
$tecnologias = ["HTML", "CSS", "JS"]; // array

// função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}
