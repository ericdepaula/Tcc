<?php
    session_start();   
    session_destroy();
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha']
    );   
    $_SESSION['loginDeslogado'] = "Deslogado com sucesso";

    //redirecionar o usuario para a página de login
    header("Location: index.php");
?>