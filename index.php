<?php
    require 'Pokemon.php';
    require 'Attack.php';
    require 'Resistance.php';
    require 'Weakness.php';
    require 'Type.php';

    $pikachu = new Pokemon(
        "Pikachu",
        "Lightning",
        60,
        [
            new Attack("Electric Ring", "Lightning", 50),
            new Attack("Pika Punch", "Fighting", 20)
        ],
        new Weakness("Fire", 1.5),
        new Resistance("Fighting", 20)
    );

    $charmeleon = new Pokemon(
        "Charmeleon",
        "Fire",
        60,
        [
            new Attack("Head Butt", "Fighting", 10),
            new Attack("Flare", "Fire", 30)
        ],
        new Weakness("Water", 2),
        new Resistance("Lightning", 10)
    );

    echo "A wild " . $pikachu->name . " has appeared! " . "It has " . $pikachu->hitPoints . "HP.<br />";
    echo "A wild " . $charmeleon->name . " has appeared! " . "It has " . $charmeleon->hitPoints . "HP.<br />";
    echo $pikachu->name . " attacks " . $charmeleon->name . " with " . $pikachu->attacks[0]->attackName . "!<br />";

    $charmeleon->hitPoints = $charmeleon->hitPoints - $pikachu->attacks[0]->damage + $charmeleon->resistance->resistanceValue;

    echo $charmeleon->name . " has " . $charmeleon->hitPoints . "HP left!<br />";
    echo $charmeleon->name . " attacks " . $pikachu->name . " with a " . $charmeleon->attacks[1]->attackName . " attack!<br />";

    $pikachu->hitPoints = $pikachu->hitPoints - $charmeleon->attacks[1]->damage * $pikachu->weakness->multiplier;

    echo $pikachu->name . " has " . $pikachu->hitPoints . "HP left!<br />";
?>
