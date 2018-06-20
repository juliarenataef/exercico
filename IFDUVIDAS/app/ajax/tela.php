<html>
    <head>

    </head>
    <body>

    <ul>

        <?php
        foreach ($usuarios as $usuario){
            echo "<li>".utf8_encode($usuario->getNome())."</li>";
        }

        ?>

    </ul>

    <ul>

        <?php
        foreach ($perguntas as $pergunta){
            echo "<li>".utf8_encode($pergunta->getNome())."</li>";
        }

        ?>

    </ul>



    </body>
</html>

