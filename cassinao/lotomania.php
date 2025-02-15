<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LotoMania-Win</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="caixa-centralizada">
            <h1 class="titulo-principal">Bem Vindos a <span class="palavra-chave">LOTOMANIA-WIN</span></h1>
        </div>
        <hr>
        <br>
        <div class="caixa-centralizada">
            <img src="https://uploads.spacemoney.com.br/2024/07/8UKLT9MF-Lotomania-logo-1280x720-1.webp" alt="lotomania logo" width=340 height=220>


            <?php
            sleep(1);
            if (isset($_REQUEST['mensagem'])) {
                echo "<p class='erro'>{$_REQUEST['mensagem']}</p>";
            }
            ?>

            <section>
                <form action="cad.php" method="get">
                    <br>
                    <input type="hidden" name="tipo_jogo" value="LOTOMANIA">
                    <label for="idJogo" class="texto">Quantidade de números da aposta:</label>
                    <input type="num" name="numeros_jogados" id="idJogo">
                    <br>
                    <label for="rangeInput" class="texto">Quantos jogos você deseja fazer:</label>
                    <input type="range" id="rangeInput" name="quantidade_jogos" min="1" max="10" step="1" value="1" oninput="output.value = rangeInput.value">
                    <output id="output">1</output>
                    <br><br>
                    <input type="submit" class="gerar" value="Gerar">
                </form>
        </div>
        </section>
    </header>
</body>

</html>