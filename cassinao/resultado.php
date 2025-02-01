<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="caixa-centralizada">

        <h1 class="titulo" id="titulo-principal">Aqui estão suas apostas!!</h1>

        <?php

        for ($i = 0; $i < sizeof($numeros_sorteados); $i++) {
            if ($i == 0) {
                print $numeros_sorteados[0];
            } else {
                print(" - " . $numeros_sorteados[$i]);
            }
        }

        
        ?>

        <p>Valor da aposta: <strong>R$<?php echo number_format($valores[$jogo][$numero_jogados], 2, ',', '.'); ?></strong></p>



        <p><a href="http://localhost/aulaphp/cassinao/index.php">Clique para realizar outra aposta!</a></p>
        
    </div>
</body>

</html>