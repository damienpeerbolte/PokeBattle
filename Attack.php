<?php
    class Attack {
        public $name;
        public $attackType;
        public $damage;

        public function __construct($name, $attackType, $damage) {
            $this->name = $name;
            $this->attackType = $attackType;
            $this->damage = $damage;
        }

        public function __get($name) {
            return $this->name[$name];
        }
    }
?>
