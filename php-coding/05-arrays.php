<?php
    $nomes = ["Paulo", "Marcos", "Gabriel"];
    // O array começa em 0, ou seja, ele irá imprimir: Paulo
    echo "${nomes[0]}\n";

    // Dê "apelidos" para os itens no array    
    $distro = ["linux" => "Arch",
               "windows" => "ruim :p"];
    echo "${distro['windows']}\n";
?>
