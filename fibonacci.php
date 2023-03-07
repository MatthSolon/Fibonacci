<?php

function fibonacci($i) {  
//Calcula a sequência de Fibonacci  

    $fib = [0, 1];
    while ($fib[count($fib) - 1] < $i) {
        $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
    }
    return array_slice($fib, 0, -1);
}

function verifica_pertence($n) {
//Verifica se o número pertence à sequência de Fibonacci.
    
    $fib = fibonacci(72723460248141);
    if (in_array($n, $fib)) {
        echo "$n pertence à sequência de Fibonacci: "."</br>" . implode(", ", $fib) . "\n";
    } else {
        echo "$n não pertence à sequência de Fibonacci: "."</br>" . implode(", ", $fib) . "\n";
    }
}
verifica_pertence(rand(0, 72723460248141));
//consulta o numero que pertence ou não a sequencia, coloquei o rand() para gerar o numero automaticamente.


?>