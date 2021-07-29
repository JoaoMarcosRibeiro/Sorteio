<?php
    $numeros = [];
    
    for ($i=1; $i <= 20; $i++) {

        $numeroSorteado = random_int(1, 10);
        array_push($numeros, $numeroSorteado);
    }

    $valor = array_count_values($numeros);

    $repetido = max(array_count_values($numeros));

    $valor = array_search($repetido ,$valor);

    $numeros = implode(" , ",$numeros);
    
    echo "Numeros sorteados: $numeros <br>";

    echo "O número que mais se repete é: $valor <br>";

    echo "O numero foi repetido: $repetido vezes";
?>