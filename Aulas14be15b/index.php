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
        <pre>
            <?php
                require_once 'Visualizacao.php';
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                $v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");
                
                $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
                $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

                $vis[0] = new Visualizacao($g[0], $v[2]);
                $vis[1] = new Visualizacao($g[0], $v[1]);
                
                $vis[0]->avaliar();
                print_r($vis);
            ?>
        </pre>
    </body>
</html>
