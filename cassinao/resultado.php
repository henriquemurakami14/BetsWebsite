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

        for ($n = 0; $n < $quantidades_apostas; $n++) { 
            for ($i = 0; $i < count($numeros_sorteados[$n]); $i++) {
                if ($i == 0) {
                    print ($numeros_sorteados[$n][0]);                    
                } else {
                    print(" - " . $numeros_sorteados[$n][$i]);
                }
            }
            print "<br>"; 
        }
    
        

        
        ?>

        <p>Valor da aposta: <strong>R$<?php echo number_format($valores[$jogo][$numero_jogados] * $quantidades_apostas, 2, ',', '.'); ?></strong></p>



        <p><a href="http://localhost/aulaphp/cassinao/index.php">Clique para realizar outra aposta!</a></p>
        
    </div>
</body>

</html>