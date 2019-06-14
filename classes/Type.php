<?php
    class Type {
        private $name;

        // Set given variables on creation
        public function __construct($name) {
            $this->name = $name;
        }

        // Getter for private variables
        public function __get($var) {
            return $this->$var;
        }
    }
?>
