<?php
    class Attack {
        private $name;
        private $damage;
        private $type;

        // Set given variables on creation
        public function __construct($name, $damage, $type) {
            $this->name = $name;
            $this->damage = $damage;
            $this->type = $type;
        }

        // Getter for private variables
        public function __get($var) {
            return $this->$var;
        }
    }
?>
