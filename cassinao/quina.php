<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega-On</title>

</head>
<body>
    <header>
        <h1>Bem Vindos a QUINA-JOGOS</h1><hr>
        
        <?php
            sleep(1);
            if (isset($_REQUEST['mensagem'])) {
                echo "<p>{$_REQUEST['mensagem']}</p>";
            }
        ?>

        <section>
            <form action="cad.php" method="get">
                <input type="hidden" name="tipo_jogo" value="QUINA">
                <label for="idJogo">Quantidade de números da aposta:</label>
                <input type="num" name="numeros_jogados" id="idJogo">
                <input type="submit" value="Gerar">
                
            </form>
        </section>
    </header>
</body>
</html>