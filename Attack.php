<?php
    class Attack {
        public $attackName;
        public $attackType;
        public $damage;

        public function __construct($attackName, $attackType, $damage) {
            $this->attackName = $attackName;
            $this->attackType = $attackType;
            $this->damage = $damage;
        }
    }
?>
