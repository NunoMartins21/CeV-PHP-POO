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
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            $a[0] = new Mamifero();
            $a[1] = new Lobo();
            $a[2] = new Cachorro();
            
            $a[2]->reagirFrase("Olá");
            $a[2]->reagirFrase("Vai apanhar");
            
            $a[2]->reagirHora(11, 45);
            $a[2]->reagirHora(21, 00);
            
            $a[2]->reagirDono(true);
            $a[2]->reagirDono(false);
            
            $a[2]->reagirIdadePeso(2, 12.5);
            $a[2]->reagirIdadePeso(17, 4.5);
        ?>
    </body>
</html>
