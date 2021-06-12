<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore Binária</title>
</head>

<body>

    <h1>Árvore Binária</h1>
    <h2>Random de 10 numeros, de 1 a 100</h2>
    <h2>Sistema de Indicação</h2>
    
    <?php

        include_once 'class/arvore.class.php';
        include_once 'class/no.class.php';

        $no1 = New No();
        $arvore = New Arvore();

        echo '<pre>';

        $i = 1;
        while ($i <= 10) {
            $i++;
            $arvore->inserir($no1, random_int(1, 100));
 //           var_dump($arvore);

        }
    ?>
    <h2>Totais</h2>
    <?php
//var_dump($valorEsquerda);
        echo '<br>Quantidade de Indicados à Esquerda = '.$valorEsquerda;
        echo '<br>Total de pontos da Esquerda = '.$valorEsquerda * 200;
//var_dump($valorEsquerda);
//echo "apos multiplicação <br>";

        echo '<br><br><br>';

        echo '<br>Quantidade de Indicados à Direita = '.$valorDireita -= 1;
        echo '<br>Total de pontos da Direita = '.$valorDireita * 100;

        echo '<br><br><br>';

    ?>
 <!--   <h2>Estrutura do nó</h2> -->

//    <?php
//
//        print_r($no1);
//
//    ?>

</body>

</html>

