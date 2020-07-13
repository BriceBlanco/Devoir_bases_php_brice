<?php
    //Les variables

    $nom = 'BRICE';
    $note1 = 15;
    $note2 = 13;
    $moyenne = ($note1 +$note2) / 2;

    echo "$nom vous avez eu $moyenne de moyenne.\n";
    echo $nom .' vous avez eu '. $moyenne.' de moyenne.';

    //Les tableaux

    $tab1 = [15,16,'Zero','Moins0',20];
    $tab2 = [
        'nom' => 'NGABIRANO',
        'prenom' => 'Brice',
        'age' => 25,
        'adresses' => ['kamenge','kinama','mutakura']
    ];

    echo "\n".$tab1[2];
    echo "\n".$tab1[4];
    echo "\n".$tab2['nom'].' '.$tab2['prenom'];
    echo "\n".$tab2['adresses'][2];

    //Les booléens

    $booleen = false;
    if ($booleen == false) {
        echo "\nVrai";
    } else {
        echo "\nFaux";
    }

    //Les boucles


    //Les conditions

    $a = ($note1 + 2) / 2;// 17:2
    $b = ($note2 + 7) / 2;// 20:2

    if($a % 2 == 0 && $b % 2 == 0) {
        echo "\nNotes paires.";
    }
    elseif ($a % 2 == 0 || $b % 2 == 0) {
        echo "\nUne des notes paires est paire.";
    }
    elseif ($a <= 10 && $b <= 10) {
        echo "\nMoyenne obtenue top top.";
    }
    else {
        echo "\nVeuillez passer au secretariat.";
    }

    switch ($moyenne) {
        case '20':
            echo "\nSuccess !!!";
            break;
        case '10':
            echo "\nEchoué !!!";
            break;
        
        default:
            echo "\nA refaire !!!";
            break;
    }

    //Les fonctions


    //POO