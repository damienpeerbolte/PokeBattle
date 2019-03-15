<?php
    class Pokemon {
        public $name;
        public $energyType;
        public $hitPoints;
        public $health;
        public $attacks;
        public $weakness;
        public $resistance;

        public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
            $this->name = $name;
            $this->energyType = new Type($energyType);
            $this->hitPoints = $hitPoints;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
        }

        public function __get($name) {
            return $this->name[$name];
        }
    }
?>
