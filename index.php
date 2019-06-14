<?php
    // Autoload classes
    require 'init.php';

    // Create Pokemon
    $charmeleon = new Charmeleon();
    $pikachu = new Pikachu();

    // Show battle
    echo '--------------------------------[STATS]--------------------------------<br />';
    echo $pikachu->name . ' (' . $pikachu->hitPoints . 'HP)<br />';
    echo '<br /><br />';
    echo $charmeleon->name . ' (' . $charmeleon->hitPoints . 'HP)<br />';
    echo "<br /><br />";
    echo '--------------------------------[LOG]--------------------------------<br />';
    echo $pikachu->attack($charmeleon, 'Electric Ring') . '<br />';
    echo $charmeleon->name . ' (new HP: ' . $charmeleon->hitPoints . ')<br />';
    echo '<br /><br />';
    echo $charmeleon->attack($pikachu, 'Flare') . '<br />';
    echo $pikachu->name . ' (new HP: ' . $pikachu->hitPoints . ')<br />';
?>
