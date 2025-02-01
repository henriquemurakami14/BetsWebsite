<?php 
    $regras = [
        "MEGA" => ["min" => 6, "max" => 15, "universo" => 60    ],
        "QUINA" => ["min" => 5, "max" => 15, "universo" => 80],
        "LOTOMANIA" => ["min" => 50, "max" => 50, "universo" => 100],
        "LOTOFACIL" => ["min" => 15, "max" => 20, "universo" => 25]
    ];

    $valores = [
        "MEGA" => ["6" => 5, "7" => 35, "8" => 140, "9" => 420, "10" => 2310, "11" => 2310, "12" => 4620, "13" => 8580,
        "14" => 15015, "15" => 25025],
        "QUINA" => ["5" => 2.5, "6" => 15, "7" => 52.5, "8" => 140, "9" => 315, "10" => 630, "11" => 1155, "12" => 1980, "13" => 3217.5, "14" => 5005, "15" => 7507.5],
        "LOTOMANIA" => ["50" => 2.5],
        "LOTOFACIL" => ["15" => 2.5, "16" => 40, "17" => 340, "18" => 2040, "19" => 9690, "20" => 38760]
    ];

    $jogo =  $_REQUEST["tipo_jogo"];
    $numero_jogados = $_REQUEST["numeros_jogados"];



    valida_numeros($jogo, $numero_jogados, $regras);
    
    $numeros_sorteados = sorteio($jogo, $numero_jogados, $regras);

    

    function valida_numeros($jogo, $numeros, $regras){
    if ("MEGA" == $jogo) {

        if ($numeros < $regras[$jogo]["min"] || $numeros > $regras[$jogo]["max"]) {
            header("location:mega.php?mensagem=<strong>Valor Inválido!</strong> Os Números devem ser de 6 a 15!");
        }

    }elseif ("QUINA" == $jogo) {
        if ($numeros < $regras[$jogo]["min"] || $numeros > $regras[$jogo]["max"]) {
            header("location:quina.php?mensagem=<strong>Valor Inválido!</strong> Os Números devem ser de 5 a 15!");
        }
    }elseif ("LOTOMANIA" == $jogo) {
        if ($numeros < $regras[$jogo]["min"] || $numeros > $regras[$jogo]["max"]) {
            header("location:lotomania.php?mensagem=<strong>Valor Inválido!</strong> Os Números devem ser exatamente 50!!");
        }
    }elseif ("LOTOFACIL" == $jogo) {
        if ($numeros < $regras[$jogo]["min"] || $numeros > $regras[$jogo]["max"]) {
            header("location:lotofacil.php?mensagem=<strong>Valor Inválido!</strong> Os Números devem ser de 15 a 20!!");
        }
    }
        

    }

    function sorteio($jogo, $numeros, $regras){
        $numeros_sorteados = [];
        $c = 0; 
        
        for ($n = 0; $n < $numeros; $n++) {  
            $ja_sorteado = false;
            $numero_sorteado = random_int(1, $regras[$jogo]["universo"]); 
        
        
            for ($i = 0; $i < $c; $i++) {
                if ($numeros_sorteados[$i] == $numero_sorteado) {
                    $ja_sorteado = true;
                    break;
                }
            }
        
            if (!$ja_sorteado) {
                $numeros_sorteados[$c] = $numero_sorteado;
                $c++;
            } else {
                $n--; 
            }
        }
        
        
        for ($i = 0; $i < $c; $i++) {
            for ($j=0; $j < $c; $j++) { 
                if ($numeros_sorteados[$i] < $numeros_sorteados[$j]) {
                    $balde = $numeros_sorteados[$j];
                    $numeros_sorteados[$j] = $numeros_sorteados[$i];
                    $numeros_sorteados[$i] = $balde;
                }
            }
        }
    return $numeros_sorteados;
     
    }

    require "resultado.php";

