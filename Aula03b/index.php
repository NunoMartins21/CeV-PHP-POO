<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02b - POO PHP</title>
    </head>
    <body>
        <?php
           require_once "Caneta.php";
           $c1 = new Caneta;
           $c1->modelo = "BIC Cristal";
           $c1->cor = "azul";
           $c1->rabiscar();
           $c1->tampar();
           $c1->destampar();
           print_r($c1);
        ?>
    </body>
</html>
