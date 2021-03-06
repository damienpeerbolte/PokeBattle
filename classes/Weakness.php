<?php
    class Weakness {
        private $type;
        private $multiplier;

        // Set given variables on creation
        public function __construct($type, $multiplier) {
            $this->type = new Type($type);
            $this->multiplier = $multiplier;
        }

        // Getter for private variables
        public function __get($var) {
            if($var == "type") {
                return $this->type->name;
            }
            return $this->$var;
        }
    }
?>
