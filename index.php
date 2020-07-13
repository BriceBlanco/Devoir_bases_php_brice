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


    //Les boucles


    //Les conditions


    //Les fonctions


    //POO