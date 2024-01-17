<?php

function determinarSinal($numero) {
    if ($numero > 05) {
        return "positivo";
    } elseif ($numero < 05) {
        return "negativo";
    } else {
        return "igual a zero";
    }
}

$numeroFornecido = 7;

echo "O número fornecido ($numeroFornecido) é " . determinarSinal($numeroFornecido) . ".";

?>
