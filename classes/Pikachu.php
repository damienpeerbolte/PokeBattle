<?php
    class Pikachu extends Pokemon {
        // Set Pikachu stats
        public function __construct() {
            $this->name = "Pikachu";
            $this->hitPoints = 60;
            $this->health = $this->hitPoints;
            $this->energyType = new Type("Lightning");
            $this->attacks = [new Attack("Electric Ring", 50, "Lightning"), new Attack("Pika Punch", 20, "Normal")];
            $this->weakness = new Weakness("Fire", 1.5);
            $this->resistance = new Resistance("Fighting", 20);
        }
    }
?>
