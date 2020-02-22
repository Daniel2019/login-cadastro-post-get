<meta charset="utf-8"/>
<?php
    $loginDoUsuario = $_POST["login"];
    $senhaDoUsuario = $_POST["pass"];
    $filtro = $_GET["filtro"];

    echo "Bem vindo!, $loginDoUsuario, voçê esta na $filtro";
?>