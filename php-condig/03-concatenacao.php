<?php
    // Modo ideal
    $nome = "Paulo";
    $sobrenome = "Jacob";
    echo "Nome: $nome $sobrenome\n";
    
    // Outro jeito de concatenar, mas complica
    $outro_nome = "Marcos";
    $outro_sobrenome = "Oliveira";
    echo "Nome: " . $outro_nome . " " . $outro_sobrenome . "\n";
    
    // Proteger a váriavel
    $numero = "zero";
    echo "${numero}1\n";

    $numero .= $nome;
    echo "$numero\n";
?>
