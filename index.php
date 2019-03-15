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
        "Charmelion",
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
?>
