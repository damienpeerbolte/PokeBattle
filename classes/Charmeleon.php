<?php
    class Charmeleon extends Pokemon {
        // Set Charmeleon stats
        public function __construct() {
            $this->name = "Charmeleon";
            $this->hitPoints = 60;
            $this->health = $this->hitPoints;
            $this->energyType = new Type("Fire");
            $this->attacks = [new Attack("Head Butt", 10, "Normal"), new Attack("Flare", 30, "Fire")];
            $this->weakness = new Weakness("Water", 2);
            $this->resistance = new Resistance("Lightning", 10);
        }
    }
?>
