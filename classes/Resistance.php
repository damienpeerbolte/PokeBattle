<?php
    class Resistance {
        private $type;
        private $value;

        // Set given variables on creation
        public function __construct($type, $value) {
            $this->type = $type;
            $this->value = $value;
        }

        // Getter for private variables
        public function __get($var) {
            return $this->$var;
        }
    }
?>
