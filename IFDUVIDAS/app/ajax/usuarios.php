<?php
    require_once '../modelos/CrudUsuarios.php';
    require_once '../modelos/CrudPerguntas.php';



    $usuario = new CrudUsuarios();
    $usuarios = $usuario ->getUsuarios();



    $pergunta = new CrudPerguntas();
    $perguntas = $pergunta -> getPerguntas();





    include 'tela.php';
