<?php
    session_start();
     $_SESSION['cadastroSucesso'] = False;

    session_destroy();
    session_unset();

    header('Location: index.php'); 
?>