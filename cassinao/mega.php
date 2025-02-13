<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega-On</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="caixa-centralizada">
            <h1 class="titulo-principal">Bem Vindos a <span class="palavra-chave">MEGA-ON</span></h1>
        </div>
        <hr>
        <br>
        <div class="caixa-centralizada">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJkhyeE68t32B4j3l-v2yT05uL2HjmPVD3lQ&s" alt="quina logo" width=340 height=220>

            <?php
            sleep(1);
            if (isset($_REQUEST['mensagem'])) {
                echo "<p class='erro'>{$_REQUEST['mensagem']}</p>";
            }
            ?>

            <section>
                <br>
                <form action="cad.php" method="get">
                    <input type="hidden" name="tipo_jogo" value="MEGA">
                    <label for="idJogo" class="texto"> Quantidade de números da aposta:</label>
                    <input type="num" name="numeros_jogados" id="idJogo">
                    <br>
                    <label for="rangeInput" class="texto">Quantos jogos você deseja fazer:</label>
                    <input type="range" name="quantidade_jogos" id="rangeInput" min="1" max="10" step="1" value="1" oninput="output.value = rangeInput.value">
                    <output id="output">1</output>
                    <br><br>
                    <input type="submit" class="gerar" value="Gerar">
                </form>
        </div>
        </section>
    </header>
</body>

</html>