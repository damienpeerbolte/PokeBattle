<?php
    class Resistance {
        public $name;
        public $value;

        public function __construct($name, $value) {
            $this->name = $name;
            $this->value = $value;
        }

        public function __get($name) {
            return $this->name[$name];
        }
    }
?>
