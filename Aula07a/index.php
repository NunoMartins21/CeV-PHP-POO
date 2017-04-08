<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            
            $uec01 = new Luta();
            $uec01->marcarLuta($l[0], $l[1]);
            $uec01->lutar();
        ?>
    </body>
</html>
