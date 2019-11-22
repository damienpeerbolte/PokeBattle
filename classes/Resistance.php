<?php
    class Resistance {
        private $type;
        private $value;

        // Set given variables on creation
        public function __construct($type, $value) {
            $this->type = new Type($type);
            $this->value = $value;
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
