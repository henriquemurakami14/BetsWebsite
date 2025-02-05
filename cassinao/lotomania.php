<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LotoMania-Win</title>

</head>
<body>
    <header>
        <h1>Bem Vindos a LOTOMANIA-WIN</h1><hr>
        
        <?php
            sleep(1);
            if (isset($_REQUEST['mensagem'])) {
                echo "<p>{$_REQUEST['mensagem']}</p>";
            }
        ?>

        <section>
            <form action="cad.php" method="get">
                <input type="hidden" name="tipo_jogo" value="LOTOMANIA">
                <label for="idJogo">Quantidade de números da aposta:</label>
                <input type="num" name="numeros_jogados" id="idJogo">
                <label for="rangeInput">Quantos jogos você deseja fazer:</label>
                <input type="range" id="rangeInput" min="1" max="10" step="1" value="1" oninput="output.value = rangeInput.value">
                <output id="output">1</output>
                <input type="submit" value="Gerar">
                
            </form>
        </section>
    </header>
</body>
</html>