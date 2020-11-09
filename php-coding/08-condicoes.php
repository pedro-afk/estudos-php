<?php
    // IF e ELSE
    $nome = "Marcos";

    if ( $nome == "Paulo" ) {
        echo "É o Paulo!\n";
    } elseif ( $nome == "Marcos" ) {
        echo "É o Marcos!\n";
    } else {
        echo "É um desconhecido...\n";
    };

    $outro_nome = "Joilson";

    // SWITCH
    switch ( $outro_nome ) {
        case "Joilson":
            echo "JOILSON\n";
        break;
        default:
            echo "ué\n";
    }

    // Forma TOP
    echo ( $nome == "Paulo" ) ? "PAULÃO\n" : "Num é\n";
?>
